<?php

// 1. while
while (true) { // Infinite loop: DON'T run this
    // Do something constantly
}

// 2. Loop with $counter
// 2.2. Add $runLoop variable to above loop
$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo "Printing counter: $counter<br>";
    // if ($counter > 5) break; // 2.1. BREAK
    // 2.3. Set $runLoop into false when $counter > 10
    /*if ($counter > 10) {
        $runLoop = false;
    }*/
    $counter++;
}

// 3. do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// 4. for
for ($i = 0; $i < 10; $i++) {
    echo "Printing counter: $i<br>";
}

// 5. foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// 6. Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') { // 8. Break when $key = 'hobbies'
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
