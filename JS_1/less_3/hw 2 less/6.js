
function sum(a, b) {
    return a + b;
}


function subtraction(a, b) {
    return a - b;
}


function division(a, b) {
    return a / b;
}


function multiplication(a, b) {
    return a * b;
}

/*
  Функция получает два числа и осуществляет над ними математическу операцию.
 */
function mathOperation(arg1, arg2, operation) {
    switch (operation) {
        case "+":
            return sum(arg1, arg2);
        case "-":
            return subtraction(arg1, arg2);
        case "/":
            return division(arg1, arg2);
        case "*":
            return multiplication(arg1, arg2);
        default:
            document.write("Операция " + operation + " не предусмотрена");
    }
}

console.log(mathOperation(3, 5, "+"));
console.log(mathOperation(3, 5, "-"));
console.log(mathOperation(3, 5, "/"));
console.log(mathOperation(3, 5, "*"));
console.log(mathOperation(3, 5, "lorem"));