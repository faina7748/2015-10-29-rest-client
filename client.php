<?php
//integration SIMKA
//system sedia ada akan create new row utk result
// run endpoint utk create new drop_file


// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/districts?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjA5MjU0OSwiZXhwIjoxNDQ3MzAyMTQ5LCJuYmYiOjE0NDYwOTI1NDksImp0aSI6IjZiMGMxYWVmZWJjMDI2NjkzNmQ5ZTE5NTc1MmNhZDM5Iiwic3ViIjoxfQ.OfYycZp_xgBY65dOFlA017anb9qCvP-F3g4_3lz9Qs8',
    CURLOPT_USERAGENT => 'Sample cURL Request'
));

// Send the request & save response to $resp
$response = curl_exec($curl);
//echo $response;

$result = json_decode($response);
//var_dump($result);

echo "<table border='1' cellspacing='0' cellpadding='0'><tr bgcolor='#fff77'>";
echo "<td>No</td>";
echo "<td>Name</td>";
echo "<td>State</td>";
echo "</tr>";

$i = 0;
if(count($result->data)>0){	
	foreach ($result->data as $district) {	
		$i++;
		echo "<tr>";
		echo "<td align='center'>". $i.".</td>";
		echo "<td>". $district->district_name."</td>";
		echo "<td>". $district->state->desc_state."</td>";
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