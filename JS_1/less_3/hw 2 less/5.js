/*
 Функция складывает переданные параметры.
 */
function sum(a, b) {
    return a + b;
}

/*
 Функция из параметра "а" вычитает параметр "b".

 */
function subtraction(a, b) {
    return a - b;
}

/*
  Функция делит параметр "a" на параметр "b".
 */
function division(a, b) {

    if (b!=0){

    return a / b;
}
    else {
        alert("На ноль нельзя делить!");
    }
}

/*
  Функция умножает параметры.
 */

function multiplication(a, b) {
    return a * b;
}