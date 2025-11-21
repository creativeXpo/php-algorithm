## Method : 01

#### 01. Define a function that accepts two inputs called `a` and `b`, both representing sorted arrays.
#### 02. Create two variables `i` and `j`, both starting at 0, to track positions in the arrays.
#### 03. Create an empty array named `merged` to hold the final sorted result.
#### 04. Loop while both `i` is less than the length of `a` and `j` is less than the length of `b`.
#### 05. During each iteration, compare the current elements from both arrays.
#### 06. If `a[i]` is smaller, add it to merged and increase `i` by 1.
#### 07. Otherwise, add `b[j]` to merged and increase `j` by 1.
#### 08. After the comparison loop ends, loop through the remaining elements in `a` and add each one to merged.
#### 09. Then loop through the remaining elements in `b` and add each one to merged.
#### 10. Return `merged` as the final sorted output.