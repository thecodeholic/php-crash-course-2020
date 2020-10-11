<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = "Peach";

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
$fruits[] = 'Peach';
echo $fruits[3].'<br>';
array_push($fruits, 'Foo');
// Remove element from the end of the array
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Apple');
// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);

// Combine array elements into string
echo implode(",", $fruits).'<br>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';

//Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}
$person['address'] ??= 'Unknown';
echo $person['address'].'<br>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';