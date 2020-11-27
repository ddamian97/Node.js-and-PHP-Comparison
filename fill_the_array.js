const reducer = (accumulator, currentValue) => accumulator + currentValue;

function fillTheArray(number){
	let range = number;
	let newArray =  new Array(number).fill(0);
	let randomNumber = 0;
	for(let i = 1; i <= range; i++){
		do{
			randomNumber = Math.floor(Math.random() * range) + 1;
			// console.log('exists: ' + randomNumber);
		}
		while(newArray.includes(randomNumber));
		newArray[i] = randomNumber;
	}
	return newArray;

}

if((process.argv[2])){
	let range = process.argv[2];
	console.log("Range: " + range);

	let array = fillTheArray(range);
	console.dir(array, {'maxArrayLength': null});

	let arraySum = array.reduce(reducer);
	console.log(arraySum);
}else{
	console.log("No arguments!");
}

