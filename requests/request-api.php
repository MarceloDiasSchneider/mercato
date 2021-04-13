<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.tagplus.com.br/produtos/5',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-Api-Version: 2.0',
    'Authorization: Bearer n2YlZlp4gAqCKmTJ9IKj7ycMu8jCHnp2',
    'Content-Type: application/json',
    'Cookie: AWSALB=b9+51vG7vq+A22resJgfrigGp/5mYdUY3iAdBgbhgDcmj4jX99n8Y0K38Kt3OFMUn9Iz+HjQ3qZWuQ2XM19+Dvr5Xf5EkUNIWh69j1/HN16i5qRHKSJmq4N2VIM8; AWSALBCORS=b9+51vG7vq+A22resJgfrigGp/5mYdUY3iAdBgbhgDcmj4jX99n8Y0K38Kt3OFMUn9Iz+HjQ3qZWuQ2XM19+Dvr5Xf5EkUNIWh69j1/HN16i5qRHKSJmq4N2VIM8'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo '<pre>';
print_r($response);
echo '</pre>';