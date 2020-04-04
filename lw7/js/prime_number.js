function isPrimeNumber(number) {
  if (number < 2) {
    console.error('a number greater than 1 is required');
  }

  if (typeof(number) === 'number') {
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
    }
  }
}