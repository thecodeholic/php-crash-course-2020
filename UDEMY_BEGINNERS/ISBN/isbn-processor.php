<?php

//check if form submitted
if(isset($_POST['submit'])){
    //assign post variable isbn number
    $isbn = $_POST['isbn'];

    //total, incrementor
    $total = 0;
    $i = 1;

    //split the string
    $digits = str_split($isbn);

    //loop through the array
    foreach($digits as $digit){
        //update the total = digit *1, 2, 3 etc
        $total += $digit * $i;
        $i++;
    }
 
    //check if total / 11

    if($total % 11 == 0){
        echo "Valid";
    } else {
        echo "Invalid";
    }

}