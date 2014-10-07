<?php
function isPrime($num) {
	if($num == 1) {
		return false;
	}
	if($num == 2) {
		return true;
	}
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
	if($numDiv==2) {
		return true;
	} else {
		return false;
	}
}

function nextPrimes($number) {
    $nextP = array();
    while ((sizeof($nextP) <= 100) and ($number <= 100000))
    {
        if (isPrime($number) == true) {
            $nextP[] = $number;
        }
        $number++;
    }
    return $nextP;
}

function my_gmp_nextprime($num) {
	if (isPrime($num)) {
		$num++;
	}
	while (!isPrime($num)) {
		$num++;
	}
	return $num;
}

function myGenPrimes($targetCount) {
	$pNums = array();
	$lastPrimeNumber = 0;
	$count = 0;
	while($targetCount != $count) {
		$lastPrimeNumber = my_gmp_nextprime($lastPrimeNumber);
		$pNums[$count] = $lastPrimeNumber;
		$count++;
	}
	return $pNums;
}

function genPrimeNumber($targetCount) {
	$pNums = array();
	$lastPrimeNumber = 0;
	$count = 0;
	while($targetCount != $count) {
		$lastPrimeNumber = gmp_nextprime($lastPrimeNumber);
		$pNums[$count] = $lastPrimeNumber;
		$count++;
	}
	return $pNums;
}
?>
