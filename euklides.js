function euklides(a, b) {
	if(b != 0){
		let c = a % b;
		console.log('a = ' + a + '\n' + 'b = ' + b + '\n' + 'c = ' + c);
		return euklides(b, c);
	}
	return a;
}

console.log(euklides(922337203685460, 857214));
