<?php

//API BIN URL BY SPOX CODER { DILA BELMILI }

$DILA_BIN = isset($_GET['bin']) ? trim(htmlentities($_GET['bin'])):'';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://lookup.binlist.net/".$DILA_BIN."");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "Accept-Encoding: gzip, deflate, br";
$headers[] = "Accept-Language: ar,en-US;q=0.9,en;q=0.8";
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36";
$headers[] = "Content-Type: application/json";
$headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
$headers[] = "X-Requested-With: XMLHttpRequest";
$headers[] = "Connection: keep-alive";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$final = curl_exec($ch);

echo $final;
exit();

?>
<html><head><title>Checker Bin By Spox.</title></head></html>