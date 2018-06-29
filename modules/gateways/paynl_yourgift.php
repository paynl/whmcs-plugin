<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_yourgift_MetaData(){
    return \Paynl\Whmcs\Gateway\YourGift::getMetaData();
}

function paynl_yourgift_config(){
    return \Paynl\Whmcs\Gateway\YourGift::getConfig();
}

function paynl_yourgift_link($params){
    return \Paynl\Whmcs\Gateway\YourGift::getLink($params);
}