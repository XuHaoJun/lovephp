<?php
include 'myUtil.php';
echo "<table border=1>";
for ($i=1;$i<82;$i++) {
	if ($i%9==1) {
		echo "<tr>";
	}

	if (isPrime($i)) {
		echo "<td>"."<span style='color:red'>".$i."</span>"."</td>";
	} else {
		echo "<td>"."<span style='color:blue'>".$i."</span>"."</td>";
	}

	if ($i%9==0) {
		echo "</tr>";
	}
}
echo "</table>";
?>
