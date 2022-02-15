<?php

function chekPrimeNumber($num) {
	for ($a = 2; $a < $num; $a++) {
		if ($num % $a == 0) {
			return false;
		} 
	}	
	return true;
}

var_dump(chekPrimeNumber(17));
