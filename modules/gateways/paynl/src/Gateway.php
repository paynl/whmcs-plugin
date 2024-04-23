<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8-2-17
 * Time: 16:18
 */

namespace Paynl\Whmcs;

interface GatewayInterface{
    /**
     * @return string The name of the payment method
     */
    public static function getName();
    /**
     * @return integer The paymentProfileId
     */
    public static function getPaymentProfileId();

}

abstract class Gateway implements GatewayInterface
{

    public static function getMetaData()
    {
        return array(
            'DisplayName' => 'PAY. - '.static::getName(),
            'APIVersion' => '1.1' // Use API Version 1.1
        );
    }

    /**
     * Define gateway configuration options.
     *
     * The fields you define here determine the configuration options that are
     * presented to administrator users when activating and configuring your
     * payment gateway module for use.
     *
     * Supported field types include:
     * * text
     * * password
     * * yesno
     * * dropdown
     * * radio
     * * textarea
     *
     * Examples of each field type and their possible configuration parameters are
     * provided in the sample function below.
     *
     * @return array
     */
    public static function getConfig()
    {
        return array(
            'FriendlyName' => array(
                'Type' => 'System',
                'Value' => 'PAY. - '.static::getName(),
            ),
            'apitoken' => array(
                'FriendlyName' => 'API Token',
                'Type' => 'text',
                'Size' => '32',
                'Default' => '',
                'Description' => 'You can find your api tokens on the <a href="https://admin.pay.nl/my_merchant">my merchant</a> page',
            ),
            'serviceid' => array(
                'FriendlyName' => 'Service Id',
                'Type' => 'text',
                'Size' => '12',
                'Default' => '',
                'Description' => 'The Service Id is the SL-code of your <a href="https://admin.pay.nl/programs/programs">Service</a>',
            ),
            'language' => array(
                'FriendlyName' => 'Language Payment Screen',
                'Type' => 'dropdown',
                'Options' => array(
                    'NL' => 'Dutch',
                    'EN' => 'English',
                    'DE' => 'German',
                    'FR' => 'French',
                    'IT' => 'Italian',
                ),
                'Description' => 'Select the language of the payment screen',
            ),
            'testMode' => array(
                'FriendlyName' => 'Test Mode',
                'Type' => 'yesno',
                'Description' => 'Tick to enable test mode',
            )
        );
    }

    public static function getLink($params)
    {
        if (isset($_POST['action']) && $_POST['action'] == 'doPayment') {
            \Paynl\Config::setApiToken($params['apitoken']);
            \Paynl\Config::setServiceId($params['serviceid']);

            $whmcsversion = isset($params['whmcsVersion']) ? $params['whmcsVersion'] : '';
            $startData = array(
                'amount' => $params['amount'],
                'testmode' => $params['testMode'] == 'on' ? 1 : 0,
                'returnUrl' => $params['returnurl'],

                'paymentMethod' => static::getPaymentProfileId(),
                'exchangeUrl' => $params['systemurl'] . '/modules/gateways/callback/' . $params['paymentmethod'] . '.php',
                'currency' => $params['currency'],
                'description' => $params['description'],
                'extra1' => $params['invoiceid'],
                'ipaddress' => \Paynl\Helper::getIp(),
                'language' => $params['language'],
                'object' => substr('whmcs 3.0.0|' . $whmcsversion . '|' . substr(phpversion(), 0, 3), 0, 64),
                'orderNumber' => $params['invoiceid'],
                'enduser' => array(
                    'initials' => $params['clientdetails']['firstname'],
                    'lastName' => $params['clientdetails']['lastname'],
                    'phoneNumber' => $params['clientdetails']['phonenumber'],
                    'emailAddress' => $params['clientdetails']['email']
                ),
                'invoiceAddress' => array(
                    'initials' => $params['clientdetails']['firstname'],
                    'lastName' => $params['clientdetails']['lastname'],
                    'streetName' => $params['clientdetails']['address1'],
                    'houseNumber' => $params['clientdetails']['address2'],
                    'zipCode' => $params['clientdetails']['postcode'],
                    'city' => $params['clientdetails']['city'],
                    'country' => $params['clientdetails']['country']
                ),
                'products' => array(),
            );

            $cart = $params['cart'];
            $items = $cart->items;
            foreach ($items as $key => $item) {
                $product = array(
                    'id' => $item->id,
                    'name' => $item->name,
                    'price' => ((float) filter_var( $item->amount, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) / 100),
                    'qty' => $item->qty,
                    'tax' => 0,
                    'type' => 'ARTICLE'
                );
                $startData['products'][] = $product;           
            }
            
            try{
                $transaction = \Paynl\Transaction::start($startData);
                $redirect = $transaction->getRedirectUrl();
                header("Location: $redirect");
            die();
            } catch (Exception $e){
                die($e->getMessage());
            }

        } else {
            $url = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
            $payNowText = $params['langpaynow'];

            $code = "<form action='$url' method='POST'>"
                . "<input type='hidden' name='action' value='doPayment' />"
                . " <input type='submit' value='$payNowText'/>"
                . "</form>";
            return $code;
        }
    }
    public static function refund($params){
        \Paynl\Config::setApiToken($params['apitoken']);
        \Paynl\Config::setServiceId($params['serviceid']);

        $refund = \Paynl\Transaction::refund($params['transid'], $params['amount']);

        return array(
            'status' => 'success',
            'rawdata' => $refund->getData(),
            'transid' => $refund->getRefundId()
        );
    }
}
