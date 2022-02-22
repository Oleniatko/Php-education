<?php

/**
 * шукає задане значення в масиві та повертає його ключ
 * @param array $arr 
 * @param int|string|bool $value
 * @return int|string|bool
 */

function getKeyElem($arr, $value) {
    foreach ($arr as $key => $sub) {
        if (gettype($sub) === "array") {
            foreach ($sub as $key1 => $sub1) {
                if (gettype($sub1) === "array") {
                    foreach ($sub1 as $key2 => $sub2) {
                        if (gettype($sub2) === "array") {
                            
                        } elseif ($sub2 === $value) {
                            return $key2;
                        }
                    }
                } elseif ($sub1 === $value) {
                    return $key1;
                }
            }
        } elseif ($sub === $value) {
            return $key;
        }
    }
    return false;
}
   

$arr = [
    'song' => [
        'Vasia' => [1, 2, 3, 4],
        'Petia' => [4, 2, 3, 4]
    ],
    'programming' =>  [
        'Vasia' => [12, 10, 5, 4],
        'Petia' => [4, 7, 9, 10]
    ]
];

echo getKeyElem($arr, 12);