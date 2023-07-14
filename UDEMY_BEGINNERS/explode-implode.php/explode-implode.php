<?php

$string = "Ken, Ben, Len, Amy";

$explodedNames = explode(", ", $string);

echo "<pre>";

print_r($explodedNames);

$implodedNames = implode("|", $explodedNames);

echo $implodedNames;