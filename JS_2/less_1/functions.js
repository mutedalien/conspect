'use strict';

// функции
var oldAdd = function(a, b) {
  return a + b;
}

const add = (a, b) => a + b;

const test = (test) => {
  return test;
}
// console.log(add(2, 2));

const user = {
  name: 'John',
  greetArrow: () => {
    console.log('Hello ', this.name);
  },
  greetFunc: function() {
    console.log('Hello ', this.name);
  }
}
// user.greetFunc();
// user.greetArrow();

// пример
// const array = ['Moscow', 'New York'];
// array.forEach(el => console.log(el));
// window.setTimeout(() => console.log('after 200 mls'), 2000);

// параметры по умолчанию
const func = (name = 'Name') => console.log(name);
func(); 
