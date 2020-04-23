<?php

function validatePhone($str)
{
    $regexp = '/^\W[0-9]{2}\W-\W[0]+[0-9]{9}\W$/';
    if (preg_match($regexp, $str)) {
        return true;
    }
    return false;
}

$phoneNumber1 = "(84)-(0978489648)";
$phoneNumber2 = "(a8)-(22222222)";

echo validatePhone($phoneNumber2);