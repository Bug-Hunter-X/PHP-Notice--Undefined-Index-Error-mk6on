function calculateSum(numbers) {
  if (!Array.isArray(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }

  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] !== 'number') {
      throw new Error('Invalid input: array elements must be numbers.');
    }
    sum += numbers[i];
  }

  return sum;
}

// Example usage:
const numbers = [1, 2, 3, 4, 5];
const sum = calculateSum(numbers);
console.log(sum); // Output: 15

const invalidNumbers = [1, 2, 'a', 4, 5];
const invalidSum = calculateSum(invalidNumbers); // throws error
console.log(invalidSum);