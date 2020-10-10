<?php

// 1. Function which prints "Hello I am TheCodeholic"
function hello()
{
    echo 'Hello I am TheCodeholic<br>';
}

hello(); // 2
hello(); // 3
hello(); // 4

// 5. Create sum of two functions
function sum($a, $b)
{
    echo ($a + $b) . '<br>'; // 5.3. return sum instead of printing
}

sum(4,5); // 5.1, 5.4. Add echo
sum(9,10); // 5.2, 5.6. Add echo

// 6. Create function to sum all numbers using ...$nums
//function sum(...$nums)
//{
//    $sum = 0;
//    foreach ($nums as $num) $sum += $num;
//    return $sum;
//}
//echo sum(1, 2, 3, 4, 6);
//
//// 7 Arrow functions
//function sum(...$nums)
//{
//    return array_reduce($nums, fn($coll, $n) => $coll + $n);
//}
//echo sum(1, 2, 3, 4, 6);


