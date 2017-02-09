<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_paysafecard_MetaData(){
    return \Paynl\Whmcs\Gateway\Paysafecard::getMetaData();
}

function paynl_paysafecard_config(){
    return \Paynl\Whmcs\Gateway\Paysafecard::getConfig();
}

function paynl_paysafecard_link($params){
    return \Paynl\Whmcs\Gateway\Paysafecard::getLink($params);
}

function paynl_paysafecard_refund($params){
    return \Paynl\Whmcs\Gateway\Paysafecard::refund($params);
}
