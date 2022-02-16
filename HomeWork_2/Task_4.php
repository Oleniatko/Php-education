<?php

// ----нажаль, це не рекурсія, ще не змогла рлзібратись з нею-----

 
function echoDivisorsOfNumber($num) {
	for ($a = 2; $a < $num; $a++) {
		if ($num % $a == 0) {
			echo $a . " ";
		} 
	}	
}

echoDivisorsOfNumber(20);
