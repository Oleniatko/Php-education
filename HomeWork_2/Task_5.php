<?php

function getDivisorsOfNumber($num) {
	$returnArr = [];
	
	for ($a = 2; $a < $num; $a++) {
		if ($num % $a == 0) {
			$returnArr[] = $a;
		}
	}
	return $returnArr;	
}

var_dump(getDivisorsOfNumber(20));
