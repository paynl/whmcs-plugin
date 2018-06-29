<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_webshopgiftcard_MetaData(){
    return \Paynl\Whmcs\Gateway\Webshopgiftcard::getMetaData();
}

function paynl_webshopgiftcard_config(){
    return \Paynl\Whmcs\Gateway\Webshopgiftcard::getConfig();
}

function paynl_webshopgiftcard_link($params){
    return \Paynl\Whmcs\Gateway\Webshopgiftcard::getLink($params);
}