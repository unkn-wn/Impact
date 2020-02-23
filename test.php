<?php $ch = curl_init('127.0.0.1:9090');
$data = array(
  'phone' => '9253524314',
  'message' => 'Hello world',
);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);?>
