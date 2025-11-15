## Method : 01

#### 01. Define a function that accepts one input called numbers, which is an array of integers.

#### 02. Initialize two variables: `largest` and `second`, and set both to `PHP_INT_MIN` to represent the smallest possible integer value.

#### 03. Loop through each element `num` in the `numbers` array.

#### 04. Inside the loop, check if `num` is greater than largest.

- If true, assign the value of `largest` to `second`, then update `largest` with `num`.

#### 05. Otherwise, check if `num` is greater than `second` but less than `largest`.

- If true, update `second` with `num`.

#### 06. After finishing the loop, check if `second` is still equal to `PHP_INT_MIN` (meaning there was no valid second largest number).

- If true, return `null`.
- Otherwise, return second as the second largest number.


## Method : 02

#### 01. Create a function that takes an array of numbers.

#### 02. Remove duplicate values.

#### 03. Sort the array in descending order.

#### 04. If a second value exists, return it; otherwise, return null.

#### 05. Call the function with a sample array and show the result.