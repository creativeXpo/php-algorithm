## Method : 01

#### 01. Define a function that accepts one input called `n`.
#### 02. Initialize two variables: `num1 = 0 and num2 = 1` to store the first two Fibonacci numbers.
#### 03. Display a message saying “Fibonacci Series up to `n` terms:”.
#### 04. Use a for loop that runs from `1` to `n`.
#### 05. During each iteration, print the current value of `num1`.
#### 06. Calculate the next number by adding `num1` and `num2`, and store it in a variable called `next`.
#### 07. Update `num1` with the value of `num2`, and `num2` with the value of `next`.
#### 08. After the loop ends, the complete Fibonacci series will be displayed as the output.

## Method : 02 - Recursive

#### 01. Define a function that accepts one input called `n`.
#### 02. If `n == 0, return 0` (base case).
#### 03. If `n == 1, return 1` (base case).
#### Otherwise, return the sum of two recursive calls: `fibonacci(n - 1) + fibonacci(n - 2)`.
#### Use a loop & echo statements to display Fibonacci numbers for the desired range.

