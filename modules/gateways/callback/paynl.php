<?php

# Required File Includes
include("../../../init.php");
include("../../../includes/functions.php");
include("../../../includes/gatewayfunctions.php");
include("../../../includes/invoicefunctions.php");

require_once("../paynl/Autoload.php");

$gatewaymodule = "paynl"; # Enter your gateway module name here replacing template

$GATEWAY = getGatewayVariables($gatewaymodule);
if (!$GATEWAY["type"]) die("Module Not Activated"); # Checks gateway module is active before accepting callback

$apiToken = $GATEWAY['apitoken'];
$serviceId = $GATEWAY['serviceid'];

$callType = $_GET['type'];


if($callType == 'exchange'){
    $pay_transactionId = $_GET['order_id'];
    
    $apiInfo = new Pay_Api_Info();
    $apiInfo->setApiToken($apiToken);
    $apiInfo->setServiceId($serviceId);
    $apiInfo->setTransactionId($pay_transactionId);
    
    $result = $apiInfo->doRequest();
    $fee = $result['paymentDetails']['paidCosts']/100;
    $amount = $result['paymentDetails']['paidCurrenyAmount']/100;
    
    $invoiceid = $result['statsDetails']['extra1'];
    
    $transid = $pay_transactionId;
    
    $status = $result["paymentDetails"]['stateName'];
    
    $invoiceid = checkCbInvoiceID($invoiceid,$GATEWAY["name"]); # Checks invoice ID is a valid invoice number or ends processing
    checkCbTransID($transid); # Checks transaction number isn't already in the database and ends processing if it does
    
    $dataArray = array(
        'fee' => $fee,
        'amount'=> $amount,
        'invoiceid'=> $invoiceid,
        'transid'=> $transid,
        'status'=> $status,
    );
    
    if($status == 'PAID'){
        addInvoicePayment($invoiceid,$transid,$amount,$fee,$gatewaymodule); # Apply Payment to Invoice: invoiceid, transactionid, amount paid, fees, modulename
	logTransaction($GATEWAY["name"],$dataArray,"Successful"); # Save to Gateway Log: name, data array, status
    
        die("TRUE| invoice #$invoiceid updated to PAID");

        
    } elseif($status == 'CANCEL'){
        logTransaction($GATEWAY["name"],$dataArray,"Canceled"); # Save to Gateway Log: name, data array, status
    
        die("TRUE| invoice #$invoiceid logged CANCELED");
    } else {
        logTransaction($GATEWAY["name"],$dataArray,"Pending"); # Save to Gateway Log: name, data array, status
      //PENDING
        die("TRUE| invoice #$invoiceid logged PENDING");
    }
    
    
    
   
}



# Get Returned Variables - Adjust for Post Variable Names from your Gateway's Documentation

