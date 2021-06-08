<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_billink_MetaData(){
    return \Paynl\Whmcs\Gateway\Billink::getMetaData();
}

function paynl_billink_config(){
    return \Paynl\Whmcs\Gateway\Billink::getConfig();
}

function paynl_billink_link($params){
    return \Paynl\Whmcs\Gateway\Billink::getLink($params);
}

function paynl_billink_refund($params){
    return \Paynl\Whmcs\Gateway\Billink::refund($params);
}
