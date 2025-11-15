<?php 

declare(strict_types=1);

// 08. Write a PHP script to generate the Fibonacci series up to n terms.

// Method: 01


function fibonacci(int $n): void {

    $num1 = 0; 
    $num2 = 1;

    echo "Fibonacci Series up to $n terms:";

    for( $i = 1; $i <= $n; $i++ ) {

        echo $num1 . " ";

        $next = $num1 + $num2;
        $num1 = $num2;
        $num2 = $next;

    }
}

// Example: Generate first 10 Fibonacci numbers

fibonacci(10);

// Method: 02 - Recursive

function fibonacci(int $n): int {

    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        // Formula: fibonacci(n) = fibonacci(n-1) + fibonacci(n-2)
        return fibonacci($n - 1) + fibonacci($n - 2);
    }

}

// Print first 10 Fibonacci numbers

for ($i = 0; $i < 10; $i++) {

    echo fibonacci($i) . " ";

}

