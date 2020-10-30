<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_vvvgiftcard_MetaData(){
    return \Paynl\Whmcs\Gateway\VVVGiftcard::getMetaData();
}

function paynl_vvvgiftcard_config(){
    return \Paynl\Whmcs\Gateway\VVVGiftcard::getConfig();
}

function paynl_vvvgiftcard_link($params){
    return \Paynl\Whmcs\Gateway\VVVGiftcard::getLink($params);
}