<?php 

declare(strict_types=1);

// 08. Write a PHP script to generate the Fibonacci series up to n terms.

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