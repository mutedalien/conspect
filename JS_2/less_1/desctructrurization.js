// деструктуризация
const person = {
  name: 'Ivan',
  age: 20
}

// старый способ
// const personName = person.name;
// console.log(personName);

const { name: personName } = person;
// console.log(personName); // Ivan

const array = ['Moscow', 'New York'];
const [ moscow, newYork ] = array;
// console.log(moscow, newYork);

const user = {
  params: {
    firstName: 'John',
    lastName: 'Smith'
  },
  goods: ['Book', 'Phone', 'Book2', 'Book3']
}

const { params: { firstName, lastName: ln }, goods: [ good1, good2 ] } = user;
// console.log(firstName);
// console.log(ln);
// console.log(good1);
// console.log(good2);


// пример
// const [ good1, good2, ...others ] = user.goods;
// console.log(good1);
// console.log(good2);
// console.log(others);

