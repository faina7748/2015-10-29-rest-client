<?php

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/districts?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAwNDAwOCwiZXhwIjoxNDQ3MjEzNjA4LCJuYmYiOjE0NDYwMDQwMDgsImp0aSI6ImRhMTU4NGMxZWIwNzU2YTI2ZDI3OGJjY2U3NzIwMGZmIiwic3ViIjoxfQ.pGu5PMK_b4t8HWRwac6_rgWLufMzZRSjKMwA2E9weNw',
    CURLOPT_USERAGENT => 'Sample cURL Request'
));

// Send the request & save response to $resp
$response = curl_exec($curl);
//echo $response;

$result = json_decode($response);
//var_dump($result);

echo "<table border='1' cellspacing='0' cellpadding='0'><tr bgcolor='#fff77'>";
echo "<td>Name</td>";
echo "<td>State</td>";
echo "</tr>";

if(count($result->data)>0){	
	foreach ($result->data as $district) {	
		echo "<tr>";
		echo "<td>". $district->district_name."</td>";
		echo "<td>". $district->state_id."</td>";
		echo "</tr>";
	}	
}
echo "</table>";
//echo "<pre>";
//print_r($result)
//echo "</pre>";

//echo json_decode($response);

// Close request to clear up some resources
curl_close($curl);
?>