<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_capayable_MetaData(){
    return \Paynl\Whmcs\Gateway\Capayable::getMetaData();
}

function paynl_capayable_config(){
    return \Paynl\Whmcs\Gateway\Capayable::getConfig();
}

function paynl_capayable_link($params){
    return \Paynl\Whmcs\Gateway\Capayable::getLink($params);
}

function paynl_capayable_refund($params){
    return \Paynl\Whmcs\Gateway\Capayable::refund($params);
}
