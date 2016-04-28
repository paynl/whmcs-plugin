<?php

require_once(realpath(dirname(__FILE__)) . '/paynl/Autoload.php');

function paynl_config()
{
    $configarray = array(
        "FriendlyName" => array("Type" => "System", "Value" => "Pay.nl"),
        "apitoken" => array("FriendlyName" => "API Token", "Type" => "text", "Size" => "50",),
        "serviceid" => array("FriendlyName" => "ServiceId", "Type" => "text", "Size" => "12",),
        "paynowtext" => array("FriendlyName" => "Tekst betaalknop", "Type" => "text", "Size" => "100", 'value' => 'Betalen'),
    );
    return $configarray;
}

function paynl_link($params)
{
    $paynowtext = $params['paynowtext'];
    
    
    if (isset($_POST['action']) && $_POST['action'] == 'doPayment')
    {
        # Gateway Specific Variables
        $apiToken = $params['apitoken'];
        $serviceId = $params['serviceid'];       

        # Invoice Variables
        $invoiceid = $params['invoiceid'];
        $description = $params["description"];
		$invoiceNumber = substr($description, strrpos($description, '-')+2);
		
        $amount = $params['amount']; # Format: ##.##
        $payAmount = round($amount * 100);
        $currency = $params['currency']; # Currency Code
        # Client Variables
        $firstname = $params['clientdetails']['firstname'];
        $lastname = $params['clientdetails']['lastname'];
        $email = $params['clientdetails']['email'];
        $address1 = $params['clientdetails']['address1'];
        $address2 = $params['clientdetails']['address2'];
        $city = $params['clientdetails']['city'];
        $state = $params['clientdetails']['state'];
        $postcode = $params['clientdetails']['postcode'];
        $country = $params['clientdetails']['country'];
        $phone = $params['clientdetails']['phonenumber'];

        # System Variables
        $systemurl = $params['systemurl'];

        # Enter your code submit to the gateway...
        $apiStart = new Pay_Api_Start();
        $apiStart->setApiToken($apiToken);
        $apiStart->setServiceId($serviceId);

        $apiStart->setAmount($payAmount);
        $apiStart->setDescription($invoiceNumber);
        $apiStart->setCurrency($currency); 
        $apiStart->setExtra1($invoiceid);

        $arrAddress = Pay_Helper::splitAddress($address1 . ' ' . $address2);
        $arrEnduser = array(
            'initials' => substr($firstname, 0, 1),
            'lastName' => $lastname,
            'phonenumber' => $phone,
            'emailAddress' => $email,
            'invoiceAddress' => array(
                'initials' => substr($firstname, 0, 1),
                'lastName' => $lastname,
                'streetName' => $arrAddress['street'],
                'streetNumber' => $arrAddress['housenumber'],
                'zipCode' => $postcode,
                'city' => $city,
                'countryCode' => $country,
            ),
        );
        $apiStart->setEnduser($arrEnduser);

        $apiStart->setExchangeUrl($systemurl.'/modules/gateways/callback/paynl.php?type=exchange');
        $apiStart->setFinishUrl($systemurl . '/viewinvoice.php?id=' . $invoiceid);
        try
        {
            $result = $apiStart->doRequest();
            $paymentUrl = $result['transaction']['paymentURL'];
            
            header('location: '.$paymentUrl);
        } catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    } else {
        $code = "<form method='POST'>"
                . "<input type='hidden' name='action' value='doPayment' />"
                . " <input type='submit' value='$paynowtext'/>"
                . "</form>";
        return $code;
    }
}

function paynl_refund($params)
{

    $apiToken = $params['apitoken'];
    $serviceId = $params['serviceid'];

    $apiRefund = new Pay_Api_Refund();

    $apiRefund->setApiToken($apiToken);
    $apiRefund->setServiceId($serviceId);
    $apiRefund->setAmount(round($params['amount'] * 100));

    $apiRefund->setTransactionId($params['transid']);

    try
    {
        $result = $apiRefund->doRequest();
        return array("status" => "success", "transid" => $result["transid"], "rawdata" => $result);
    } catch (Exception $ex)
    {
        $arrData = $apiRefund->getPostData();
        $arrData['error'] = $ex->getMessage();
        return array("status" => "declined", "rawdata" => $arrData);
    }
}

?>