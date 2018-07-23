<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_paypal_MetaData(){
    return \Paynl\Whmcs\Gateway\Paypal::getMetaData();
}

function paynl_paypal_config(){
    return \Paynl\Whmcs\Gateway\Paypal::getConfig();
}

function paynl_paypal_link($params){
    return \Paynl\Whmcs\Gateway\Paypal::getLink($params);
}

function paynl_paypal_refund($params){
    return \Paynl\Whmcs\Gateway\Paypal::refund($params);
}
