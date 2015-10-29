<?php
// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/districts?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAwNDAwOCwiZXhwIjoxNDQ3MjEzNjA4LCJuYmYiOjE0NDYwMDQwMDgsImp0aSI6ImRhMTU4NGMxZWIwNzU2YTI2ZDI3OGJjY2U3NzIwMGZmIiwic3ViIjoxfQ.pGu5PMK_b4t8HWRwac6_rgWLufMzZRSjKMwA2E9weNw',
    CURLOPT_USERAGENT => 'Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'district_name' => 'Ipoh',
        'state_id' => '08'
    )
));

// Send the request & save response to $resp
$response = curl_exec($curl);

$result = json_decode($response);
//var_dump($result);
if ($result->district) {
    echo 'New District added!';
}

// Close request to clear up some resources
curl_close($curl);
?>