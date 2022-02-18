<?php

function echoSymbolByNumberInString($symb, $num) {
    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat($symb, $i) . "\n";
    }
}

echoSymbolByNumberInString('#', 5);