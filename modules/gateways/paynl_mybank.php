<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_mybank_MetaData(){
    return \Paynl\Whmcs\Gateway\Mybank::getMetaData();
}

function paynl_mybank_config(){
    return \Paynl\Whmcs\Gateway\Mybank::getConfig();
}

function paynl_mybank_link($params){
    return \Paynl\Whmcs\Gateway\Mybank::getLink($params);
}

function paynl_mybank_refund($params){
    return \Paynl\Whmcs\Gateway\Mybank::refund($params);
}
