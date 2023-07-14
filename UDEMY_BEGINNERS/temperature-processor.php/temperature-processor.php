<?php

if(isset($_POST['submit'])){
    $temperature = $_POST['temperature'];
    $units = $_POST['units'];
    $accuracy = $_POST['accuracy'];
    if($units == "C"){
        $convertedTemperature = $temperature * 9 / 5 + 32;
        $units = "F";
    } else {
        $convertedTemperature = ($temperature - 32) * 5 / 9;
        $units = "C";
    }
    $convertedTemperature = round($convertedTemperature, $accuracy);

    echo "The converted temperature is $convertedTemperature&deg$units to $accuracy decimal places";
} else {
    echo "Please visit temperature form page";
}
