<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

foreach($cities as $city){
    echo $city . "<br>";
}


$students = ["Sam"=>12, "Holly"=>11, "Ben"=>9];

foreach($students as $student=>$age){
    echo "$student is $age years old.<br>";
}