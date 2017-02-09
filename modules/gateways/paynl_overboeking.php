<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_overboeking_MetaData(){
    return \Paynl\Whmcs\Gateway\Overboeking::getMetaData();
}

function paynl_overboeking_config(){
    return \Paynl\Whmcs\Gateway\Overboeking::getConfig();
}

function paynl_overboeking_link($params){
    return \Paynl\Whmcs\Gateway\Overboeking::getLink($params);
}

function paynl_overboeking_refund($params){
    return \Paynl\Whmcs\Gateway\Overboeking::refund($params);
}
