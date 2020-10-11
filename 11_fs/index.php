<?php
// Magic constants
echo __FILE__ . '<br>';
echo __DIR__ . '<br>';

// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
//$files = scandir('./');
//echo '<pre>';
//var_dump($files);
//echo '</pre>';

// file_get_contents, file_put_contents
$lorem = file_get_contents('lorem.txt');
echo $lorem;
echo '<br>';
file_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);

// file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent);
var_dump($users);

// Check if file exists or not
file_exists('lorem.txt'); // true

// Get file size
filesize('lorem.txt');

// Delete file
unlink('lorem.txt');

// https://www.php.net/manual/en/book.filesystem.php
