<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8-2-17
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class CapayableGespreid extends Gateway
{
    public static function getName()
    {
        return 'in3 keer betalen, 0% rente';
    }
    public static function getPaymentProfileId()
    {
        return 1813;
    }
}