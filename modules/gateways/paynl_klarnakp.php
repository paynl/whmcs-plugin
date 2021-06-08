<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_klarnakp_MetaData(){
    return \Paynl\Whmcs\Gateway\Klarnakp::getMetaData();
}

function paynl_klarnakp_config(){
    return \Paynl\Whmcs\Gateway\Klarnakp::getConfig();
}

function paynl_klarnakp_link($params){
    return \Paynl\Whmcs\Gateway\Klarnakp::getLink($params);
}

function paynl_klarnakp_refund($params){
    return \Paynl\Whmcs\Gateway\Klarnakp::refund($params);
}
