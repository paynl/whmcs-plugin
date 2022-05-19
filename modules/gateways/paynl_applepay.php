<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_applepay_MetaData(){
    return \Paynl\Whmcs\Gateway\Applepay::getMetaData();
}

function paynl_applepay_config(){
    return \Paynl\Whmcs\Gateway\Applepay::getConfig();
}

function paynl_applepay_link($params){
    return \Paynl\Whmcs\Gateway\Applepay::getLink($params);
}

function paynl_applepay_refund($params){
    return \Paynl\Whmcs\Gateway\Applepay::refund($params);
}
