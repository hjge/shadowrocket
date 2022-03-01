<?php
$ch = curl_init();
// $url1 = "https://api.shadowrocket.top/sms.php?authCode=";

$url1 = "https://json.id1314.com/apple.php?authCode=";
$url2 = $_GET["authCode"];
curl_setopt($ch, CURLOPT_URL, $url1.$url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$output = curl_exec($ch);
curl_close($ch);
print_r($output);
?>