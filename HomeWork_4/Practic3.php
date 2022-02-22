<?php

$arr = [0, 1, 2, 3, 4, 5];

function getSumElement($sum, $num) {
	$sum += $num;
	return $sum;
}

print_r(array_reduce($arr, 'getSumElement'));



