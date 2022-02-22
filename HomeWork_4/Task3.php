<?php

function echoElemArr($arr) {
    foreach ($arr as $sub) {
        if (gettype($sub) === 'array') {
            echoElemArr($sub);           
        }
        else {
            echo $sub;
        };
    };
};

$arr = [[1, 2, 3], [[4, 5, [6, 7]], [8, [9, 10]]]];

echoElemArr($arr);