<?php

if(isset($_POST['submit'])){
    $sentence = $_POST['string'];
    $spaces = $_POST['spaces'];
    if($spaces == "Y"){
        $sentenceLength = strlen(str_replace(" ", "", $sentence));
    } else {
        $sentenceLength = strlen($sentence);
    }
    
    echo "The sentence is $sentenceLength characters long";
}