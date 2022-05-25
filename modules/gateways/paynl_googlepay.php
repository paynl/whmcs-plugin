<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_googlepay_MetaData(){
    return \Paynl\Whmcs\Gateway\Googlepay::getMetaData();
}

function paynl_googlepay_config(){
    return \Paynl\Whmcs\Gateway\Googlepay::getConfig();
}

function paynl_googlepay_link($params){
    return \Paynl\Whmcs\Gateway\Googlepay::getLink($params);
}

function paynl_googlepay_refund($params){
    return \Paynl\Whmcs\Gateway\Googlepay::refund($params);
}
