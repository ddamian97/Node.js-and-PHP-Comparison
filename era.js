// our sieve function which will return a list of primes
// up to the limit argument passed
function sieve(limit) {

	var bools = [];
	var primes = [];

	// generate a list of booleans all set to true initially
	// the array is indexed from 2 to limit representing all numbers
	// e.g. [true, true, true, true] = [2, 3, 4, 5]
	for (var i = 1; i < limit; i++) { bools.push(true); }

	// loop from 2 to limit setting the composite numbers to false
	// we start from 2 because we know 1 is not a prime number
	for (var i = 2; i < limit; i++) {
		if (bools[i-2]) {
			for (var j = i*2; j <= limit; j += i) {
				bools[j-2] = false;
			}
		}
	}

	// now generate the list of primes only where
	// there is a true value in the bools array
	for (var p = 0; p < bools.length; p++) {
		if (bools[p]) { primes.push(p+2); }
	}
	console.log(bools.length);

	return primes;
}

let primesSieve = sieve(100000);
console.log(primesSieve);
let sum = primesSieve.reduce((a, b) => a + b, 0)
console.log(sum);
