const one = document.querySelector('.one');

one.style.width = '150px';          //  задаем ширину
one.style.paddingBottom = '50px';   //  задаем отступ снизу
console.log(one.style);             //  выведет в консоль доступные стили

one.classList.add('two', 'three');  //  добавляем стилевый класс
one.classList.remove('three');      //  удаляем стилевый класс

//  добавляем стили к кнопке
const toggle = document.querySelector('.toggle');
toggle.onclick = function () {
    this.classList.toggle('three');
}

//  атрибуты data (сохраняем состояние элемента)
console.log(one.getAttribute('data'));   //  выведем атрибут в консоль
console.log(document.querySelectorAll('link')[0].getAttribute('href'));

one.setAttribute('data-num', 6);

let gas = document.querySelectorAll('.gas');    //  получим все кнопки в массив
for (let i = 0; i < gas.length; i++) {          //  переберем массив
    gas[i].onclick = function () {              //  вешаем событие
        let gallons = document.querySelector('.gallons').value; //  получаем галлоны
        let amount = this.getAttribute('data');                 //  получаем стоимость
        console.log(gallons * amount);          //  выводим в консоль стоимость
    }
}

//  добавляем элемент div со стилями и событиями на страницу
let a = document.createElement('div');
a.innerHTML = 'Hello!';
a.classList.add('one');
a.onclick = function() {
    alert('hello');
}
document.querySelector('.test').appendChild(a);