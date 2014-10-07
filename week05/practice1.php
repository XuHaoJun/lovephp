<?php
$numA = $_GET["numA"];
$numB = $_GET["numB"];

if ($numA > $numB) {
	$head = $numB;
	$end = $numA;
} else {
	$head = $numA;
	$end = $numB;
}

while($head<=$end) {
	echo $head."<br/>";
	$head++;
}
?>
