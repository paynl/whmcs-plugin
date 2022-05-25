<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_przelewy24_MetaData(){
    return \Paynl\Whmcs\Gateway\Przelewy24::getMetaData();
}

function paynl_przelewy24_config(){
    return \Paynl\Whmcs\Gateway\Przelewy24::getConfig();
}

function paynl_przelewy24_link($params){
    return \Paynl\Whmcs\Gateway\Przelewy24::getLink($params);
}

function paynl_przelewy24_refund($params){
    return \Paynl\Whmcs\Gateway\Przelewy24::refund($params);
}
