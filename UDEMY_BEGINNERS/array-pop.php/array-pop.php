<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

$lastCity = array_pop($cities);

echo $lastCity;

echo "<br>";

echo "<pre>";

print_r($cities);

$firstCity = array_shift($cities);

echo $firstCity;

echo "<br>";

print_r($cities);