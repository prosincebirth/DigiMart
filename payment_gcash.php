<?php

$url = "https://api4wrd.2kpa.me/paymongo/v1/create"; // you will need an app_key, get it from -> https://api4wrd.ukayra.com/register

$redirect = [
    "success" => "http://192.168.254.107/digimart/success.php",
    "failed" => "http://192.168.254.107/digimart/failed.php"
];

$billing = [
    "name" =>  $_GET["first_name"] . " " .  $_GET["last_name"],
    "phone" =>  $_GET["mobile"],
    "email" => $_GET["email"]
];

$attributes = [
    "livemode" => false,
    "type" => "gcash",
    "amount" => (int)$_GET["amount"] ,
    "currency" => "PHP",
    "redirect" => $redirect,
    "billing" => $billing,
];

// FYI = You can use the PAYMONGO secret key & password below;
// "secret_key" => "sk_test_HL7BiubdGVbXHXCt2nhf8fNE"
// "password" => "your-paymongo-password" 

$source = [
    "app_key" => "3cf17b4091e29a0c56d1ebe42afea1f152a97bf1", // get it from -> https://api4wrd.ukayra.com/register
    "secret_key" => "sk_test_n1dojUNSm7zxD62ZjTTwMHZ9", // secret key from paymongo - be sure your account is fully activated
    "password" => "@Abella123", // your paymongo account password - be sure your account is fully activated
    "data" => [
        "attributes" => $attributes
    ]
];


$jsonData = json_encode($source);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// disable ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
$resData = json_decode($result, true);

echo ''.$result;

if ($resData["status"] == 200) {
    // header("Location: " . $resData["url_redirect"] );
    echo '<script>localStorage.setItem("deposited_amount", '. (int)$_GET["amount"] .');</script>';
    echo '<script>
        window.location.href = "'. $resData["url_redirect"] .'";  
    </script>';
} else {
    //header("Location: user_wallet.php");
    echo "ERROR: ".$resData["status"];
}

die();