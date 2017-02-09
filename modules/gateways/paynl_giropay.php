<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_giropay_MetaData(){
    return \Paynl\Whmcs\Gateway\Giropay::getMetaData();
}

function paynl_giropay_config(){
    return \Paynl\Whmcs\Gateway\Giropay::getConfig();
}

function paynl_giropay_link($params){
    return \Paynl\Whmcs\Gateway\Giropay::getLink($params);
}

function paynl_giropay_refund($params){
    return \Paynl\Whmcs\Gateway\Giropay::refund($params);
}
