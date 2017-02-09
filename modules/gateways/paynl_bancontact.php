<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_bancontact_MetaData(){
    return \Paynl\Whmcs\Gateway\Bancontact::getMetaData();
}

function paynl_bancontact_config(){
    return \Paynl\Whmcs\Gateway\Bancontact::getConfig();
}

function paynl_bancontact_link($params){
    return \Paynl\Whmcs\Gateway\Bancontact::getLink($params);
}

function paynl_bancontact_refund($params){
    return \Paynl\Whmcs\Gateway\Bancontact::refund($params);
}
