<?php 

function changeCaseToUpper($str, $symb) {
	 $symbUpper = strtoupper($symb);
	 echo str_replace($symb, $symbUpper, $str);
}

changeCaseToUpper('fdfv fjdf fff1', 'f');
