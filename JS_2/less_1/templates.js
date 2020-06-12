// шаблонные строках
const title = 'Title for Header';
// const header = '<h1>' + title + '</h1>';

const header = `
    <h1>${title.toUpperCase()}</h1>
    <div>div</div>
`;

const name = 'John';
const tag = (strings, name, age) => {
  console.log(strings);
  console.log(name);
  console.log(age);
}

tag`Name is ${name}, and age is ${20}`;

// console.log(header);
