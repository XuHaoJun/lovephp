<?php
function isPrime($num) {
	if($num == 1)
		return false;

	if($num == 2)
		return true;

	if($num % 2 == 0) {
		return false;
	}
	for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
		if ($num % $i == 0)
			return false;
	}
	return true;
}

function isPrime2($num) {
	$numDiv=0;
	for($i=1;$i<=$num;$i++) {
		if($num%$i==0)
			$numDiv++;
	}
	if($numDiv==2)
		return true;
	else
		return false;
}
?>