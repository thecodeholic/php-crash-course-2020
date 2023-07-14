<?php

$string = "I love this website but feel that the stupid badword1 comments are detracting from the user experience.  The person who wrote this is a badword2.";

$badWords = ["badword1", "badword2"];

foreach($badWords as $badWord){
    $string = str_replace($badWord, "****", $string);
}

echo $string;