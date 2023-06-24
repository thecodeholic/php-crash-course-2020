<?php

$temperatures = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6];

$sum = array_sum($temperatures);

$count = count($temperatures);

$averageTemperature = $sum / $count;

$roundedAverage = round($averageTemperature, 1);

sort($temperatures);

$lowestTemperatures = array_slice($temperatures, 0, 5);

$lowestTemperatures = implode(", ", $lowestTemperatures);

$highestTemperatures = array_slice($temperatures, -5, 5);

$highestTemperatures = implode(", ", $highestTemperatures);

echo "The average daily temperature is " . $roundedAverage;

echo "<br>";

echo "The 5 lowest temperatures are " . $lowestTemperatures;

echo "<br>";

echo "The 5 highest temperatures are " . $highestTemperatures;





