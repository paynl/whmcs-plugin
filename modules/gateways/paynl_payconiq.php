<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_payconiq_MetaData(){
    return \Paynl\Whmcs\Gateway\Payconiq::getMetaData();
}

function paynl_payconiq_config(){
    return \Paynl\Whmcs\Gateway\Payconiq::getConfig();
}

function paynl_payconiq_link($params){
    return \Paynl\Whmcs\Gateway\Payconiq::getLink($params);
}

function paynl_payconiq_refund($params){
    return \Paynl\Whmcs\Gateway\Payconiq::refund($params);
}
