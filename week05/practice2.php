<?php
include 'myUtil.php';

$numA = $_GET["numA"];
$numB = $_GET["numB"];

if ($numA > $numB) {
	$numMin = $numB;
	$numMax = $numA;
} else {
	$numMin = $numA;
	$numMax = $numB;
}

while($numMin<=$numMax) {
	if (isPrime($numMin)) {
		echo $numMin."<br/>";
	}
	$numMin++;
}
?>
