<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $colour = $_POST['colour'];

    setcookie("name", $name);
    setcookie("age", $age);
    setcookie("colour", $colour);
} else {
    echo "Please complete the form";
}