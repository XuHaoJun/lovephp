<?php
echo "<table border=1>";
for ($i=1;$i<82;$i++)
{
	if ($i%9==1) 
	{
		echo "<tr>";
	}

	if ($i%2==1) 
	{
		echo "<td>"."<span style='color:blue'>".$i."</span>"."</td>";
	} else {
		echo "<td>"."<span style='color:red'>".$i."</span>"."</td>";
	}

	if ($i%9==0) 
	{
		echo "</tr>";
	}
}
echo "</table>";
?>
