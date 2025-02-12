<?php
include 'config.php';
//$otp = rand(1000,9999);


  $otp = rand(1000,9999);
  echo $otp;
  $phone = "+917783864876"; // target number; includes ISD
  $api_key = 'fa25d402-fe1d-11ec-9c12-0200cd936042'; // API Key
  $req = "https://2factor.in/API/V1/".$api_key."/SMS/".$phone."/".$otp;

  $sms = file_get_contents($req);
  $sms_status = json_decode($sms, true);
  if($sms_status['Status'] !== 'Success') {
    $err['error'] = 'Could not send OTP to '.$phone;
  }
?>