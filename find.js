
// czy jest sens przeszukiwac systemy plikowe, bo warto porownac z grepem

function findTheWord(word, fileName){
	const fs = require("fs");

	let file = fs.readFileSync(fileName,  "utf8");
	let arr = file.split(/\r?\n/);
	let count = 0;
	console.log(arr);
	arr.forEach((line, idx)=> {
		if(line.includes(word)){
			// console.log((idx+1)+':'+ line);
			count++;
			// process.exit()
		}
	});
	if(!count){
		console.log( "No verse found");
	}
	console.log(count);

}
let fileName = 'biblia-tysiaclecia.txt';
let word = 'Odrośl';

findTheWord(word, fileName);
