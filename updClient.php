<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/laravel-api-starter/public/api/districts/15",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "district_name=Ipoh%20Mali&state_id=08",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAwNDAwOCwiZXhwIjoxNDQ3MjEzNjA4LCJuYmYiOjE0NDYwMDQwMDgsImp0aSI6ImRhMTU4NGMxZWIwNzU2YTI2ZDI3OGJjY2U3NzIwMGZmIiwic3ViIjoxfQ.pGu5PMK_b4t8HWRwac6_rgWLufMzZRSjKMwA2E9weNw",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 0896b735-3922-0b03-9d02-05e3c4bcf266"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}