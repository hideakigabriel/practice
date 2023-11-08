/* Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.

Examples:
Input: 42145 Output: 54421

Input: 145263 Output: 654321

Input: 123456789 Output: 987654321 */

// Solution 

function descendingOrder(n) {
  const reversedArray = n.reverse();
  return reversedArray
}

console.log(descendingOrder([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]))

// Order Solution

function descendingOrder(n){
  return +(n+'').split('').sort().reverse().join('')
}