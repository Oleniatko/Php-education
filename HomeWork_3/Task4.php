<?php

function echoReflectsText($str) {
    $lastSymb = strlen($str) - 1;
    for ($i = $lastSymb; $i >= 0; $i--) {
        echo $str[$i];
    }
}

echo echoReflectsText("Test");

