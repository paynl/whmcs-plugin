<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8-2-17
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