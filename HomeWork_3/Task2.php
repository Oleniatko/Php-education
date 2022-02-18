<?php 

function echoSymbolByNumberInString($str, $symb) {
	
	for ($i = 0; $i < strlen($str); $i++) {
	if ($str[$i] === $symb){
		echo $symb . "\n";
	}
	}
}

echoSymbolByNumberInString('fdfv fjdf fff1', 'f');
