<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_creditclick_MetaData(){
    return \Paynl\Whmcs\Gateway\CreditClick::getMetaData();
}

function paynl_creditclick_config(){
    return \Paynl\Whmcs\Gateway\CreditClick::getConfig();
}

function paynl_creditclick_link($params){
    return \Paynl\Whmcs\Gateway\CreditClick::getLink($params);
}

function paynl_creditclick_refund($params){
    return \Paynl\Whmcs\Gateway\CreditClick::refund($params);
}
