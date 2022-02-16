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





//-------вирішення через рекурсію (зроблено в середу, в терміни виконання не вклалась)------
//------ функція приймає два аргументи, чи підходить це під умови задачі? --------

function echoDivisorsForNumber($num, $a) {
	  
	if ($num % $a == 0) {
	 	echo $a . " дільник \n";
	}
	 
	if ($a > 2) {
	 	$a--;
	 	echoDivisorsForNumber($num, $a);
	}
} 


echoDivisorsForNumber(21, 20);

//---- вирішення через рекурсію, варіант 2-----


function echoDivisorsForNumber($num, $a) {
	if ($a > 1 && $a < $num) {
		if ($num % $a == 0) {
	 	echo $a . " дільник \n";
		}
	}	  
	
	 if ($a < $num) {
	 	$a++;
	 	echoDivisorsForNumber($num, $a);
	}
} 


echoDivisorsForNumber(21, 0);
