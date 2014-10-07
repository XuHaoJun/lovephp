<?php
$m=$_GET["m"];
$n=$_GET["n"];
$numCount=0;
$numbers = array();
while($numCount!=$m) {
	$randNum=rand(1, $n);
	if ($numbers[$randNum] != true) {
		$numbers[$randNum] = true;
		$numCount++;
		echo $randNum." ";
	}
}
?>
