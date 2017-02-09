<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_ideal_MetaData(){
    return \Paynl\Whmcs\Gateway\Ideal::getMetaData();
}

function paynl_ideal_config(){
    return \Paynl\Whmcs\Gateway\Ideal::getConfig();
}

function paynl_ideal_link($params){
    return \Paynl\Whmcs\Gateway\Ideal::getLink($params);
}

function paynl_ideal_refund($params){
    return \Paynl\Whmcs\Gateway\Ideal::refund($params);
}
