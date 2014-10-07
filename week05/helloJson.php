<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, 'http://data.ntpc.gov.tw/NTPC/od/data/api/IMC123/?$format=json');
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
$result = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

$dumpJson = json_decode($result, true);

/*
foreach ($dumpJson as $value) {
	foreach ($value as $k => $v) {
		echo "<span style='color:blue'".$k."</span>";
	}
}
 */
?>
