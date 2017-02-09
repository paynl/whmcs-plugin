<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_maestro_MetaData(){
    return \Paynl\Whmcs\Gateway\Maestro::getMetaData();
}

function paynl_maestro_config(){
    return \Paynl\Whmcs\Gateway\Maestro::getConfig();
}

function paynl_maestro_link($params){
    return \Paynl\Whmcs\Gateway\Maestro::getLink($params);
}

function paynl_maestro_refund($params){
    return \Paynl\Whmcs\Gateway\Maestro::refund($params);
}
