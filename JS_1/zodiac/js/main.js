document.querySelector('button').onclick = () => {
    let day = +document.querySelector('#day').value;
    let month = +document.querySelector('#month').value;
    //  2 11 ! необходимо перевести в число!
    //  if ((month == 12 && day >= 22) || (month == 1 && day <= 19)) alert('Козерог');  // так
    //  или так
    if (month == 1) {
        if (day <= 19) alert('Козерог');
        else alert('Водолей');
    }
    //  и так далее для остальных месяцев
}