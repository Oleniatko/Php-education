<?php

$arr = [0, 1, 2, 3, 4, 5];

function checkConditions($num) {
	If ($num >= 3) {
		return true;
	} else {
		return false;
	}
}


$newArr = array_filter($arr, 'checkConditions');
print_r($newArr);
