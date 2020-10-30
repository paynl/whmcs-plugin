<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_phone_MetaData(){
    return \Paynl\Whmcs\Gateway\Phone::getMetaData();
}

function paynl_phone_config(){
    return \Paynl\Whmcs\Gateway\Phone::getConfig();
}

function paynl_phone_link($params){
    return \Paynl\Whmcs\Gateway\Phone::getLink($params);
}
function paynl_phone_refund($params){
    return \Paynl\Whmcs\Gateway\Phone::refund($params);
}