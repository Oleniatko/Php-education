<?php

$a = 2;
$b = 4;
$c = 5;

if ($a > $b && $a > $c) {
	echo "More number $a \n";
} elseif ($b > $a && $b > $c) {
	echo "More number $b \n";
} elseif ($c > $a && $c > $b) {
	echo "More number $c \n";
}


if ($a < $b && $a < $c) {
	echo "Smaller number $a \n";
} elseif ($b < $a && $b < $c) {
	echo "Smaller number $b \n"; 
} elseif ($c < $a && $c < $b) {
	echo "Smaller number $c \n";
}


if ($a == $b && $b == $c) {
	echo "$a \n";
} 
