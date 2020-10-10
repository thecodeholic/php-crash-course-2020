<?php

// 1. Print current timestamp
echo time() . '<br>';

// 2. Print current date
echo date('Y-m-d H:i:s') . '<br>';

// 3. Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// 4. Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// 5. String to timestamp
echo strtotime('now') . "<br>";
echo strtotime('+1 day') . "<br>";
echo strtotime('+1 week') . "<br>";

// 6. Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35'; // Declare date
$parsedDate = date_parse($dateString); // Parse date
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// 7. Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35'; // With non-default format

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
