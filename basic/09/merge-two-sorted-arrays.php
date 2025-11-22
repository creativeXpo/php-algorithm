<?php 

declare(strict_types=1);

// 9. Merge two sorted arrays into one sorted array without using built-in sorting functions.

// Method: 01

function mergeSortedArrays(array $a, array $b): array {
    $i = 0; 
    $j = 0;
    $merged = [];

    // Compare elements from both arrays and merge
    while ($i < count($a) && $j < count($b)) {
        if ($a[$i] < $b[$j]) {
            $merged[] = $a[$i];
            $i++;
        } else {
            $merged[] = $b[$j];
            $j++;
        }
    }

    // Add remaining elements from $a
    while ($i < count($a)) {
        $merged[] = $a[$i];
        $i++;
    }

    // Add remaining elements from $b
    while ($j < count($b)) {
        $merged[] = $b[$j];
        $j++;
    }

    return $merged;
}

// Example
$a = [1, 3, 5, 7];
$b = [2, 4, 6, 8];

print_r(mergeSortedArrays($a, $b));


// Method 02: Recursive

function mergeRecursive(array $a, array $b): array {

    // If one array is empty, return the other
    if (empty($a)) return $b;
    if (empty($b)) return $a;

    // Compare first elements
    if ($a[0] < $b[0]) {
        // ... Spread Operator Take each element from the inner array and insert them individually here.
        return [$a[0], ...mergeRecursive(array_slice($a, 1), $b)];
    } else {
        return [$b[0], ...mergeRecursive($a, array_slice($b, 1))];
    }

}

// Example:
$a = [1, 3, 5, 7];
$b = [2, 4, 6, 8];

print_r(mergeRecursive($a, $b));