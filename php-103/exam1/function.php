<?php

function checkNumber($number)
{
    $result = "";
    if ($number && is_numeric($number)) {
        $result = ($number % 2 == 0) ? "Even" : "Odd";
    }
    return $result;
}

if (isset($_POST['inputNumber'])) {
    $inputNumber = checkNumber($_POST['inputNumber']);
    echo 'Entered value: ' . $_POST['inputNumber'] . '<br>';
    echo 'Result: ' . $inputNumber;
}
