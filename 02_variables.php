<?php

// What is a variable
    /*
    PHP is is loosely typed variables that don't have types. They are dynamic and change based upon the value of what you place inside the variable.
    */

// Variable types
    /*String, Integer, Float/Double, Boolean, Null, Array, Object, Resource*/

// Declare variables
    $name = 'Zura'; //string
    $age = 28; //integer
    $isMale = true; //true converts into a 1 when printed as a string dynamically; False is converted into an empty string. Null is an empty string also.
    $height = 1.85;
    $salary = null;

// Print the variables. Explain what is concatenation
    echo $name.'<br/>';
    echo $age . '<br/>';
    echo $isMale . '<br/>';
    echo $height . '<br/>';
    echo $salary . '<br/>';

// Print types of the variables
    echo gettype($name) . '<br/>';
    echo gettype($age) . '<br/>';
    echo gettype($isMale) . '<br/>';
    echo gettype($height) . '<br/>';
    echo gettype($salary) . '<br/>';

// Print the whole variable
    // var_dump() method is very useful when working with objects and arrays. It's used to reveal all the variable specific information about whatever you enter into it.
    var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
    $name = false;
// Print type of the variable
    echo gettype($name) . '<br/>';

// Variable checking functions
    // these methods will evaluate to dynamically display 1 or nothing
    echo is_string($name); //false
    echo is_int($age); //true
    echo is_bool($isMale); //true
    echo is_double($height); //true

// Check if variable is defined
    echo '<br/>';
    echo isset($name); //true
    echo isset($address); //false
    echo '<br/>';

// Constants
    // this storage data type does not change.
    define('PI', 3.14);
    echo PI .  '<br/>';

    define('isWilliamCool', true); // evaluates to display a 1
    echo isWilliamCool .  '<br/>';

// Using PHP built-in constants
    echo SORT_ASC . '<br/>'; //used to sort a list in ascending order
    echo PHP_INT_MAX . '<br/>'; //prints largest number PHP can handle