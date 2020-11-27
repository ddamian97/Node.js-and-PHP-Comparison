function cosFunc(x, multiplier) {
    return Math.cos(multiplier * x) - x;

}
function bisectionMethod(a, b, i, epsilon) {

    if(cosFunc(a, i) == 0){
        return a;
    }
    if(cosFunc(b, i) == 0){
        return b;
    }


    while (b - a > epsilon) {
        let middle = (a + b) / 2;
        if (cosFunc(middle, i) == 0) {
            return middle;
        }
        if (cosFunc(a, i) * cosFunc(middle, i) < 0) {
            b = middle;
        } else {
            a = middle;
        }
    }
    return ((a + b) / 2);

}
function operateBisection(b, epsilon, size){
    let result = b;
    let a = 0;

    for (let i = 1; i <= size; i++) {
        result = bisectionMethod(a, b, i, epsilon);
        b = result;

    }
    return result;
}


let b = Math.PI;
let epsilon = 0.0001;
// let epsilon = 0.0000000000000001;
let size = 10;
// let size = 100000000;
console.log(operateBisection(b, epsilon, size));
// console.log("\nMiejsce zerowe dla i = " + size + " to: " + result + "\n \n");
