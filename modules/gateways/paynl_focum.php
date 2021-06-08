<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_focum_MetaData(){
    return \Paynl\Whmcs\Gateway\Focum::getMetaData();
}

function paynl_focum_config(){
    return \Paynl\Whmcs\Gateway\Focum::getConfig();
}

function paynl_focum_link($params){
    return \Paynl\Whmcs\Gateway\Focum::getLink($params);
}

function paynl_focum_refund($params){
    return \Paynl\Whmcs\Gateway\Focum::refund($params);
}
