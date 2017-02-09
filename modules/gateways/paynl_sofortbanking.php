<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_sofortbanking_MetaData(){
    return \Paynl\Whmcs\Gateway\Sofortbanking::getMetaData();
}

function paynl_sofortbanking_config(){
    return \Paynl\Whmcs\Gateway\Sofortbanking::getConfig();
}

function paynl_sofortbanking_link($params){
    return \Paynl\Whmcs\Gateway\Sofortbanking::getLink($params);
}

function paynl_sofortbanking_refund($params){
    return \Paynl\Whmcs\Gateway\Sofortbanking::refund($params);
}
