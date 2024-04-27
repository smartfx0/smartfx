<?php

if(isset($_POST['submit'])){

    
    $phonenumber = $_POST['phone-number']; // Phone number paying
    //$amount = '100'; //Amount to transact 
    $amount = $_POST['amount'];
    $Account_no = '   EARNESTPRO | KCB PAYBILL NUMBER   '; // Enter account number optional
    $url = 'https://tinypesa.com/api/v1/express/initialize';
    $data = array(
        'amount' => $amount,
        'msisdn' => $phonenumber,
        'account_no'=>$Account_no
    );
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'ApiKey:           ' // Replace with your api key
     );
    $info = http_build_query($data);
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);
    $msg_resp = json_decode($resp);
    
    
    if ($msg_resp ->success == 'true') {
        echo "Wait for the  M-pesa Prompt Modal Pop up...";
      } else {
        echo "Transaction Failed";
       
      }
}



?>