<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_spraypay_MetaData(){
    return \Paynl\Whmcs\Gateway\Spraypay::getMetaData();
}

function paynl_spraypay_config(){
    return \Paynl\Whmcs\Gateway\Spraypay::getConfig();
}

function paynl_spraypay_link($params){
    return \Paynl\Whmcs\Gateway\Spraypay::getLink($params);
}

function paynl_spraypay_refund($params){
    return \Paynl\Whmcs\Gateway\Spraypay::refund($params);
}
