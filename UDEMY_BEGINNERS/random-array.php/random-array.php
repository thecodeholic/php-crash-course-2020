<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

$city = $cities[0];

echo $city;

echo "<br>";

$cityPosition = array_rand($cities);

$city = $cities[$cityPosition];

echo $city;