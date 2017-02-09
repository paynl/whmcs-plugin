<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_visaMastercard_MetaData(){
    return \Paynl\Whmcs\Gateway\VisaMastercard::getMetaData();
}

function paynl_visaMastercard_config(){
    return \Paynl\Whmcs\Gateway\VisaMastercard::getConfig();
}

function paynl_visaMastercard_link($params){
    return \Paynl\Whmcs\Gateway\VisaMastercard::getLink($params);
}

function paynl_visaMastercard_refund($params){
    return \Paynl\Whmcs\Gateway\VisaMastercard::refund($params);
}
