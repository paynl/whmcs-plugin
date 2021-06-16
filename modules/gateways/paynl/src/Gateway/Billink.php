<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Billink extends Gateway
{
    public static function getName()
    {
        return 'Achteraf betalen via Billink';
    }
    public static function getPaymentProfileId()
    {
        return 1672;
    }
}