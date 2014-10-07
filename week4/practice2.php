<?php
include './myUtil.php';
$pNum=$_GET['pNum'];
for($i=0;$i<$pNum;$i++) {
	if (isPrime($i)) {
		echo $i." ";
	}
}
?>
