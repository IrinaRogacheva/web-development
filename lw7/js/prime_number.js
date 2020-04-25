function isPrimeNumber(number) {
  if (typeof(number) === 'number' && number > 1 && Number.isInteger(number)) {
    let isPrime = true;
    for (let i = 2; i < number; i++) {
      if (number % i === 0) {
        isPrime = false;
        break;
      }
    }
    if (isPrime) {
      console.log(number, 'is prime number');
      return;
    } else {
      console.log(number, 'is not prime number');
      return;
    }
  }
  if (typeof(number) === 'object') {
      for (let i = 0; i <= number.length - 1; i++) {
        isPrimeNumber(number[i]);
      }
      return;
  }
  console.log(number, ' is invalid parameter');
}
