<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
	$arr[] = rand(1, 7);
}

//print_r($arr);

$arrResult = [];

while(count($arr) > 0) {
	$elem = array_shift($arr);
	$elemNext = array_shift($arr);
	$elemSumm = $elem + $elemNext;	
	
	array_push($arrResult, $elem, $elemNext, $elemSumm);
}
 
print_r($arrResult);

