<?php
$access_token = 'SBmgFi5Kqnvj/eQp3hfEVdN/PrUgcr/bHLpfaYL/KyclQ9Q0ZxU/q1kx1CZiwBUWmyIfsfCdrr6ZPRko4JFiXZn6GynMhZpUTwOr2Wy1trK1qnHLZ4XaRFQTKilzTqPDgNg60pHVtbrzm9xAOdAfzAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
