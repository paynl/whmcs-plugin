<?php

namespace Paynl;

use Paynl\Api\Transaction as Api;
use Paynl\Config;

/**
 * Description of Paymentmethods
 *
 * @author Andy Pieters <andy@pay.nl>
 */
class Paymentmethods
{

    /**
     * Reorder the result from the Transaction/getService API into a more logical format
     *
     * @param array $input The result from the getService API
     * @return array
     */
    private static function reorderOutput($input)
    {
        $paymentMethods = array();

        foreach ((array)$input['countryOptionList'] as $country) {

            foreach ((array)$country['paymentOptionList'] as $paymentOption) {
                if (isset($paymentMethods[$paymentOption['id']])) {
                    $paymentMethods[$paymentOption['id']]['countries'][] = $country['id'];
                    continue;
                }

                $banks = array();
                if (!empty($paymentOption['paymentOptionSubList'])) {
                    foreach ((array)$paymentOption['paymentOptionSubList'] as $optionSub) {

                        $image = '';
                        if (isset($optionSub['image'])) {
                            $image = $optionSub['image'];
                        }
                        $banks[] = array(
                          'id' => $optionSub['id'],
                          'name' => $optionSub['name'],
                          'visibleName' => $optionSub['visibleName'],
                          'image' => $image,
                        );
                    }
                }

                $paymentMethods[$paymentOption['id']] = array(
                  'id' => $paymentOption['id'],
                  'name' => $paymentOption['name'],
                  'visibleName' => $paymentOption['visibleName'],
                  'min_amount' => $paymentOption['min_amount'],
                  'max_amount' => $paymentOption['max_amount'],
                  'countries' => array($country['id']),
                  'banks' => $banks,
                  'brand' => $paymentOption['brand'],
                );
            }
        }

        return $paymentMethods;
    }

    /**
     * Filter the result to only return payment methods allowed for a country
     *
     * @param array $paymentMethods
     * @param string $country
     * @return array filtered paymentmethods
     */
    private static function filterCountry($paymentMethods, $country)
    {
        $output = array();
        foreach ($paymentMethods as $paymentMethod) {
            if (in_array($country, $paymentMethod['countries'], true)
              || in_array('ALL', $paymentMethod['countries'], true)
            ) {
                $output[] = $paymentMethod;
            }
        }
        return $output;
    }

    /**
     * Get a list of available payment methods
     *
     * @param array $options
     * @param null $languageCode For translation of names and descriptions. Use for example 'en' or 'nl'.
     * @return array
     * @throws Error\Api
     * @throws Error\Error
     * @throws Error\Required\ApiToken
     */
    public static function getList(array $options = array(), $languageCode = null)
    {
        $api = new Api\GetService();

        if (!empty($languageCode)) {
            $api->setLanguageCode($languageCode);
        }

        # Always use default gateway for getService
        \Paynl\Config::setApiBase('https://rest-api.pay.nl');

        $result = $api->doRequest();

        $paymentMethods = self::reorderOutput($result);

        if (isset($options['country'])) {
            $paymentMethods = self::filterCountry($paymentMethods, $options['country']);
        }

        return $paymentMethods;
    }

    /**
     * Get a list of available banks
     *
     * @param int|null $paymentMethodId If empty, the paymentMethodId for iDEAL will be used
     * @return array
     */
    public static function getBanks($paymentMethodId = 10)
    {
        $paymentMethods = self::getList();
        if (isset($paymentMethods[$paymentMethodId])) {
            return $paymentMethods[$paymentMethodId]['banks'];
        }
        return array();
    }
}
