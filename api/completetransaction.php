<?php
require_once "../init.php";
if(!$authClass->isLoggedIn()){
    header("Location: logout");
    exit;
}
$transactionid= $_POST['transactionid'] ?? 0;
$payoutreference = $_POST['payoutreference'] ?? 0;
die(json_encode($adminCl->verifyTransaction($transactionid,$payoutreference)));