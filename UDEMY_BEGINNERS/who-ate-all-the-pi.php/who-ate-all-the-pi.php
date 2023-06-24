<?php

$radius = 5;

$area = pi() * pow($radius, 2);

echo $area;
echo "<br>";

$area = round($area, 2, PHP_ROUND_HALF_UP);
echo $area;

echo "<br>";

echo "The area of a circle with radius of $radius is $area to 2 d.p.";