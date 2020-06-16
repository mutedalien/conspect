const getTodoItem = (id, callback) => {
  let xhr;
  if (window.XMLHttpRequest) {
    // Chrome, Mozilla, Opera, Safari
    xhr = new XMLHttpRequest();
  } else if (window.ActiveXObject) { 
    // Internet Explorer
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
      const data = JSON.parse(xhr.responseText);
      callback(data);
    }
  }

  // GET, POST, PUT ...
  xhr.open('GET', `https://jsonplaceholder.typicode.com/todos/${id}`, true);
  xhr.send();
}

// getTodoItem(4, (todoData) => {
//   getPostItem(1, (postData) => {
//     console.log(postData);
//   });
// });


// const async = (cb) => {
//   setTimeout(cb, 2500);
// }

// async(() => console.log('callback function'));

// document
//   .querySelector('.btn')
//   .addEventListener('click', (e) => console.log('event', e));

// три состояния промиса
// pending - ожидание
// fulfilled - выполнено успешно
// rejected - завершается с ошибка

const async = (a) => {
  return new Promise((resolve, reject) => {
    // выполняется какая-то асинхронная операция
    setTimeout(() => {
      if (a) {
        const b = a + 1;
        resolve(b);
      } else {
        reject('Error');
      }
    }, 1000);
  });
}

// async()
//   .then((number) => console.log(number))
//   .catch((err) => console.log(err))
//   .finally(() => console.log('finally'))

// fetch('https://jsonplaceholder.typicode.com/todos/1')
//   .then(response => response.json())
//   .then(json => console.log(json))
//   .finally(() => console.log('Данные успешно получены'))

