<?php

function checkPasswordOfComplexity($str) {
    $len = strlen($str);
    $isUpper = preg_match('#(?=.*[A-Z])#', $str);
    $isLower = preg_match('#(?=.*[a-z])#', $str);
    $isNumber = preg_match('#(?=.*[0-9])#', $str);
    $isSymbol = preg_match('#(?=.*[!@\#$%^&*])#', $str);

    if ($len >= 8 && $isUpper === 1 && $isLower === 1 && $isNumber === 1 && $isSymbol === 1) {
        echo "Password is complexity";
    } elseif ($len >= 8 && $isUpper === 1 && $isLower === 1 && $isNumber === 1) {
            echo "Password is normal";
    } else {
        echo "Password is simple";
    }
}

checkPasswordOfComplexity("Test32$%fs");