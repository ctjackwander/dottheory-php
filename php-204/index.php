<?php
function checkPalindrome($string) {
    $string = strtolower($string);
    $palindrome = '';
    for ($x = strlen($string) - 1; $x >= 0; $x--) {
        $palindrome .= $string[$x];
    }
    return $string == $palindrome;
}

echo checkPalindrome('madam');
