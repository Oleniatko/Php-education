<?php 

//приймає масив та елемент
//повертає масив
//перебирає елементи масиву
//порівнює їх з переданим елементом
//видаляє всі співпадіння

$arr = [2, 3, 'f', 5, 'd', 'd'];


//-------варіант 1 ------

function foundAndDeleteElem(array $arr, $elem) {
	$string = implode($arr);
	$newString = str_replace($elem, '', $string);
	$newArr = str_split($newString);
	print_r($newArr);
}

foundAndDeleteElem($arr, 'd');


//-------варіант 2 ------

function foundAndDeleteElem(array $arr, $elem) {
	foreach($arr as $key => $value) {
		if($value === $elem) {
			unset($arr[$key]);
		}
	}
	print_r($arr);
}

foundAndDeleteElem($arr, 'd');


