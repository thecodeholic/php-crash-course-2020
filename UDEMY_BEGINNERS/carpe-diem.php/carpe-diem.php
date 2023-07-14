<?php

    date_default_timezone_set('Australia/Brisbane');

    // 1.	Friday 16th July 2021
    echo date('l jS F Y');
    echo "<br>";

    // 2.	Today is Friday
    echo "Today is " . date('l');
    echo "<br>";

    // 3.	Friday 16 July, 2021
    echo date('l d F, Y');
    echo "<br>";

    // 4.	2021/07/16				(Year / Month / Day)
    echo date('Y/m/d');
    echo "<br>";

    // 5.	Friday 16th July 2021, 3:12 PM
    echo date('l dS F Y, g:i A');
    echo "<br>";

    $year = date('L');

    if($year){
        echo "This is a leap year";
    } else {
        echo "This is not a leap year";
    }