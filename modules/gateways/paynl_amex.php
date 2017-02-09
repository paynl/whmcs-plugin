<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_amex_MetaData(){
    return \Paynl\Whmcs\Gateway\Amex::getMetaData();
}

function paynl_amex_config(){
    return \Paynl\Whmcs\Gateway\Amex::getConfig();
}

function paynl_amex_link($params){
    return \Paynl\Whmcs\Gateway\Amex::getLink($params);
}

function paynl_amex_refund($params){
    return \Paynl\Whmcs\Gateway\Amex::refund($params);
}
