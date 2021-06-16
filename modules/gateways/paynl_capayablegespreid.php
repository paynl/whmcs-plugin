<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_capayablegespreid_MetaData(){
    return \Paynl\Whmcs\Gateway\CapayableGespreid::getMetaData();
}

function paynl_capayablegespreid_config(){
    return \Paynl\Whmcs\Gateway\CapayableGespreid::getConfig();
}

function paynl_capayablegespreid_link($params){
    return \Paynl\Whmcs\Gateway\CapayableGespreid::getLink($params);
}

function paynl_capayablegespreid_refund($params){
    return \Paynl\Whmcs\Gateway\CapayableGespreid::refund($params);
}
