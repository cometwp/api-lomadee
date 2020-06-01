<?php

$url = "http://sandbox-api.lomadee.com/v3/". LMD_API_TOKEN ."/store/_all?sourceId=". LMD_SOURCE_ID;
$ch  = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = json_decode(curl_exec($ch));
