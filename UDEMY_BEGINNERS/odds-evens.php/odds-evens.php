<?php

$evens = 0;
$odds = 0;

for($i = 1; $i <= 100; $i++){
    $randomNumber = rand(1, 100);
    if ($randomNumber % 2 == 0) {
        $evens++;
    } else {
        $odds++;
    }
}

echo "There were $evens even numbers and $odds odd numbers";