<?php

declare(strict_types=1);

// 07. Find the second largest number in an array.

// Method : 01

function secondLargest( array $numbers ): ?int {

    $largest = $second = PHP_INT_MIN;

    foreach($numbers as $num) {

        if( $num > $largest ) {
            $second = $largest;
            $largest = $num;
        } elseif ($num > $second && $num < $largest) {
            $second = $num;
        }

    }

    // (condition) ? (value_if_true) : (value_if_false);
    return ( $second === PHP_INT_MIN ? null : $second);
}

$arr = [5, 10, 3, 8, 15, 15];

echo "Second largest number is: " . secondLargest($arr);


// Method : 02

function secondLargestWithSort(array $numbers): ?int {
    
    // Remove duplicates to avoid same largest values
    $uniqueNumbers = array_unique($numbers);

    // Sort in descending order
    rsort($uniqueNumbers);

    // Check if at least two unique numbers exist
    return isset($uniqueNumbers[1]) ? $uniqueNumbers[1] : null;
}

// Example usage
$arr = [5, 10, 3, 8, 15, 15];
echo "Second largest number is: " . secondLargestWithSort($arr);

