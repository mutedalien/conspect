const abuse = ['hi', 'blin', 'goose'];

document.querySelector('button').onclick = () => {
    let text = document.querySelector('textarea').value;
    console.log(text);  //  тестируем
    for (let  i = 0; i < abuse.length; i++) {
        while (text.indexOf(abuse[i]) != -1) {
            text = text.replace(abuse[i], star(abuse[i].length));
        }
    }
    document.querySelector('#out').innerHTML += '<div class="commet">'+text+'</div>';
}

function star(n) {
    let out = '';
    for (let i = 0; i < n; i++) {
        out += '*';
    }
    return out;
}