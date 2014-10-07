<?php
include 'myUtil.php';
echo "<table border=1>";
$pNums = myGenPrimes(100);
for ($i=0; $i<100; $i++) {
	if ($i%10 == 0) {
		echo "<tr>";
	}

	// change color
	if ($i%2 == 1) {
		echo "<td>"."<span style='color:red'>".$pNums[$i]."</span>"."</td>";
	} else {
		echo "<td>"."<span style='color:blue'>".$pNums[$i]."</span>"."</td>";
	}

	if ($i%10==9) {
		echo "</tr>";
	}
}
echo "</table>";
?>
