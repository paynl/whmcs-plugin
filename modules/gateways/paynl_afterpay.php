<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_afterpay_MetaData(){
    return \Paynl\Whmcs\Gateway\Afterpay::getMetaData();
}

function paynl_afterpay_config(){
    return \Paynl\Whmcs\Gateway\Afterpay::getConfig();
}

function paynl_afterpay_link($params){
    return \Paynl\Whmcs\Gateway\Afterpay::getLink($params);
}

function paynl_afterpay_refund($params){
    return \Paynl\Whmcs\Gateway\Afterpay::refund($params);
}
