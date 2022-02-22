<?php

/**
 * шукає задане значення в масиві та повертає його ключ
 * @param array $arr 
 * @param int|string|bool $value
 * @return int|string|bool
 */

function getKeyElem($arr, $value) {
    foreach ($arr as $key => $sub) {
        if (gettype($sub) === 'array') {
            $result = getKeyElem($sub, $value);
            if ($result !== false) {
                return $result;
            }         
        }
        elseif ($sub === $value) {
            return $key . '-' . $value;
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