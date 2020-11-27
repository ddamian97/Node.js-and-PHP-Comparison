function countTheLines(fileName){
	const readline = require('readline');
	const fs = require('fs');
	// dołączam obsługę systemu plikow

	let numberOfLines = 0;
	let readLine = readline.createInterface({
		input: fs.createReadStream(fileName),
		output: process.stdout,
		terminal: false
	});
	readLine.on('line', function (line) {
		numberOfLines++; // on each linebreak, add +1 to 'linesCount'
	});
	readLine.on('close', function () {
		console.log(numberOfLines); // print the result when the 'close' event is called
	});

}
let fileName = 'biblia-tysiaclecia.txt';
countTheLines(fileName);
// https://riptutorial.com/node-js/example/10103/determining-the-line-count-of-a-text-file
// 20201119
