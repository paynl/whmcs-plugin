<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_trustly_MetaData(){
    return \Paynl\Whmcs\Gateway\Trustly::getMetaData();
}

function paynl_trustly_config(){
    return \Paynl\Whmcs\Gateway\Trustly::getConfig();
}

function paynl_trustly_link($params){
    return \Paynl\Whmcs\Gateway\Trustly::getLink($params);
}

function paynl_trustly_refund($params){
    return \Paynl\Whmcs\Gateway\Trustly::refund($params);
}
