<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_dankort_MetaData(){
    return \Paynl\Whmcs\Gateway\Dankort::getMetaData();
}

function paynl_dankort_config(){
    return \Paynl\Whmcs\Gateway\Dankort::getConfig();
}

function paynl_dankort_link($params){
    return \Paynl\Whmcs\Gateway\Dankort::getLink($params);
}

function paynl_dankort_refund($params){
    return \Paynl\Whmcs\Gateway\Dankort::refund($params);
}
