<?php

for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FIZZ BUZZ";
    } else if ($i % 3 == 0){
        echo "FIZZ";
    } else if($i % 5 == 0){
        echo "BUZZ";
    } else {
        echo $i;
    }
    echo "<br>";
}