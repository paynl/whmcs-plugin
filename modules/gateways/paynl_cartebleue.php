<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_cartebleue_MetaData(){
    return \Paynl\Whmcs\Gateway\Cartebleue::getMetaData();
}

function paynl_cartebleue_config(){
    return \Paynl\Whmcs\Gateway\Cartebleue::getConfig();
}

function paynl_cartebleue_link($params){
    return \Paynl\Whmcs\Gateway\Cartebleue::getLink($params);
}

function paynl_cartebleue_refund($params){
    return \Paynl\Whmcs\Gateway\Cartebleue::refund($params);
}
