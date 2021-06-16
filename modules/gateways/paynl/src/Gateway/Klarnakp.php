<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Klarnakp extends Gateway
{
    public static function getName()
    {
        return 'KlarnaKP';
    }
    public static function getPaymentProfileId()
    {
        return 2265;
    }
}