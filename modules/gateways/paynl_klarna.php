<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_klarna_MetaData(){
    return \Paynl\Whmcs\Gateway\Klarna::getMetaData();
}

function paynl_klarna_config(){
    return \Paynl\Whmcs\Gateway\Klarna::getConfig();
}

function paynl_klarna_link($params){
    return \Paynl\Whmcs\Gateway\Klarna::getLink($params);
}

function paynl_klarna_refund($params){
    return \Paynl\Whmcs\Gateway\Klarna::refund($params);
}
