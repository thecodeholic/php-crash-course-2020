<?php

//check if form submitted
if(isset($_POST['submit'])){
//assign variables, total, incrementor
    $ccNumber = $_POST['cc'];
    $total = 0;
    $i = 1;

    //get last 4 digits
    $last4 = substr($ccNumber, -4, 4);

    //split string into array
    $ccNumber = str_split($ccNumber);

    //reverse array
    $ccNumber = array_reverse($ccNumber);

    //loop through the array and calculate
    foreach($ccNumber as $digit){
        //if even digit
        if($i % 2 == 0){
            //multiply by 2
            $digit *= 2;
            //if digit > 9
            if($digit > 9){
                //subtract 9
                $digit -= 9;
            }
        }
        //total = total + digit 
        $total += $digit;
        //incrementor + 1
        $i++;
    }
        

    //check total / 10
    if($total % 10 == 0){
        echo "Your credit card number with last 4 digits " . $last4 . " is valid";
    } else {
        echo "Your credit card number with last 4 digits " . $last4 . " is invalid";
    }
        
 
}
    

//outside of message check




