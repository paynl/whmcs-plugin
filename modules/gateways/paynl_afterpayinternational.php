<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_afterpayinternational_MetaData(){
    return \Paynl\Whmcs\Gateway\AfterpayInternational::getMetaData();
}

function paynl_afterpayinternational_config(){
    return \Paynl\Whmcs\Gateway\AfterpayInternational::getConfig();
}

function paynl_afterpayinternational_link($params){
    return \Paynl\Whmcs\Gateway\AfterpayInternational::getLink($params);
}

function paynl_afterpayinternational_refund($params){
    return \Paynl\Whmcs\Gateway\AfterpayInternational::refund($params);
}
