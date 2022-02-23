<?php

$arr = [0, 1, 2, 3, 4, 5];

function getSumElement($sum, $num) {
	$sum += $num;
	return $sum;
}

$result = array_reduce($arr, 'getSumElement');
echo $result;

