<?php

function check($str1, $str2) {
    $minStringLength = 0;
    $maxStringLength = 0;
    if(strlen($str1) > strlen($str2)) {
        $minStringLength = strlen($str2);
        $maxStringLength = strlen($str1);
    }  elseif(strlen($str1) < strlen($str2)) {
        $minStringLength = strlen($str1);
        $maxStringLength = strlen($str2);
    } else{
        $minStringLength = strlen($str1);
        $maxStringLength = strlen($str1);
    }
    $count = 0;
    for ($i = 0; $i < $minStringLength; $i++) {
        if ($str1[$i] === $str2[$i]) {
            $count++;
        }
    }
    $proc = ($count / $maxStringLength) * 100;
    echo $proc;
}
$str1 = 'qwerty';
$str2 = 'awerty';

check($str1, $str2);
