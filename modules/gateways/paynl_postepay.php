<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_postepay_MetaData(){
    return \Paynl\Whmcs\Gateway\Postepay::getMetaData();
}

function paynl_postepay_config(){
    return \Paynl\Whmcs\Gateway\Postepay::getConfig();
}

function paynl_postepay_link($params){
    return \Paynl\Whmcs\Gateway\Postepay::getLink($params);
}

function paynl_postepay_refund($params){
    return \Paynl\Whmcs\Gateway\Postepay::refund($params);
}
