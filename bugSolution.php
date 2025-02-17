<?php
// Original buggy code
// $myArray = ['a' => 1, 'b' => 2];
// echo $myArray['c']; // Throws Notice: Undefined index: c

// Solution: Check for key existence before accessing
$myArray = ['a' => 1, 'b' => 2];

if (isset($myArray['c'])) {
    echo $myArray['c'];
} else {
    echo 'Index "c" does not exist.'; //Handle gracefully
}

//Alternative: Using the null coalescing operator
echo $myArray['c'] ?? 'Index "c" does not exist.';

//Another approach - using array_key_exists()
if (array_key_exists('c', $myArray)) {
  echo $myArray['c'];
} else {
  echo 'Index "c" does not exist.';
}
?> 