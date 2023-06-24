<?php

$ones = 0;
$twos = 0;

for($i = 1; $i <= 100; $i++){
    $randomNumber = rand(1, 2);
    if($randomNumber == 1){
        $ones++;
    } else {
        $twos++;
    }
}

echo "1 = " . $ones;
echo "<br>";
echo "2 = " . $twos;