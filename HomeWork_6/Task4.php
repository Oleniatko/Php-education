<?php

//-----1 варіант, працюючий -----

function keepUniqueValue(array $arr) {
	$newArr = [];
	foreach ($arr as $elem) {
		if(!in_array($elem, $newArr)) {
			$newArr [] = $elem;
		}			
	}
	$arr = $newArr;
	print_r($arr);
}

$arr = [2, 2, 3, 5, 7, 7];
keepUniqueValue($arr);


//----- 2 варіант----- 
// чому не працює? підкажіть, будь ласка, де помилка; 

/*

function keepUniqueValue(array $arr) {
	$newArr = [];
	foreach ($arr as $elem) {
		//var_dump($elem); чомусь нічого не виводить, не бачить $elem;

	foreach ($newArr as $newElem) {
		if($elem === $newElem) {
			break;
		} else {
			$newArr[] = $elem;
			print_r($newArr);
		}
	}	
}
	$arr = $newArr;
	print_r($newArr);
}

$arr = [0, 2, 3, 5, 7, 7];
keepUniqueValue($arr);

*/
