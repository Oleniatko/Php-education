<?php
function getDayNameByNumber($day) {
	switch ($day) {
		case 1;
			echo "Monday";
		break;
		case 2;
			echo "Tuesday";
		break;
		case 3;
			echo "Wednesday";
		break;
		case 4;
			echo "Thursday";
		break;
		case 5;
			echo "Friday";
		break;
		case 6;
			echo "Saturday";
		break;
		case 7;
			echo "Sunday";
		break;
		default:
			echo "Warning";
		break;
	}
}

getDayNameByNumber(9);


//-----------Other Variant-------------------------


function getDayNameByNumber($num) {
	$arr = [
		1 => 'Monday', 
		2 => 'Tuesday', 
		3 => 'Wednesday', 
		4 => 'Thursday', 
		5 => 'Friday', 
		6 => 'Saturday', 
		7 => 'Sanday'
	];
	if ($num >= 1 && $num <=7) {
		return $arr[$num];
	} else {
		return "Warning";
	}	
}

echo getDayNamebyNumber(2);
