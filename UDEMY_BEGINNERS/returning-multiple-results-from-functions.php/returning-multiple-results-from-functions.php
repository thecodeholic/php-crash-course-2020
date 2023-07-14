<?php

function calculate($number1, $number2){
    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    return [$sum, $difference];
}

$results = calculate(10, 3);

echo $results[0];
echo "<br>";
echo $results[1];
echo "<br>";
