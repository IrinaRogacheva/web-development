function isPrimeNumber(number) {
  if (typeof number !== 'number' && typeof number !== 'object') {
    console.log(number, ' is invalid parameter');
    return;

  } else if (typeof number === 'number') {
    let isPrime = true;
    for (let i = 2; i < number; i++) {
      if (number % i === 0) {
        isPrime = false;
        break;
      }
    }

    if (isPrime && number > 1 && Number.isInteger(number)) {
      console.log(number, 'is prime number');
    } else {
      console.log(number, 'is not prime number');
    }

  } else {
    for (let i = 0; i <= number.length - 1; i++) {
      isPrimeNumber(number[i]);
    }
  }
}
