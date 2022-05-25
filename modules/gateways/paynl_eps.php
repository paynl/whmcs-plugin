<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__."/paynl/vendor/autoload.php";

function paynl_eps_MetaData(){
    return \Paynl\Whmcs\Gateway\Eps::getMetaData();
}

function paynl_eps_config(){
    return \Paynl\Whmcs\Gateway\Eps::getConfig();
}

function paynl_eps_link($params){
    return \Paynl\Whmcs\Gateway\Eps::getLink($params);
}

function paynl_eps_refund($params){
    return \Paynl\Whmcs\Gateway\Eps::refund($params);
}
