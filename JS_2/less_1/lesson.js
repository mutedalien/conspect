// Объявление переменных
function test() {
  let a = 1;
  if (true) {
     let a = 6;
     console.log(a); // 6
  }
  console.log(a); // 1
}

const key = 'jdfs87fsd87fdsb8f';
// console.log(key);
// key = 34; // error

const person = {
  name: 'Ivan',
  age: 25
};

// person = {}; // error

console.log(person);
person.name = 'John';
console.log(person);
