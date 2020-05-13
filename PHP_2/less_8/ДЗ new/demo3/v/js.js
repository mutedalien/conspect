function addToBasket(id, user_id) {
    $.ajax({
        url: '../m/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: {
            'task': 'addToBasket',
            'id':id,
            'user_id': user_id
        },
        error: function (req, text, error) {
            console.log(req)// отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            console.log(dateAnswer);
        }
    });
};

function confirmOrder(ids) {
    $.ajax({
        url: '../m/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: {
            'task': 'confirmOrder',
            'ids':ids,
        },
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (dateAnswer) {
            $('#content').html(dateAnswer)
        }
    });
};

function changeStatus(status_id, order_id) {
    var str = "changeStatus=" + status_id+'&order_id='+order_id;
    console.log(str);
    $.ajax({
        url: '../m/admin.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: str,
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + req + ' | ' + error);
        },
        success: function (answ) {
            var st = parseInt(status_id);
            st++;
            $('#tek_st_'+order_id)[0].innerText = answ.tek_status;
            if (answ.next_status != null) {
                $('#sled_st_'+order_id).parent().html('<a id="sled_st_'+order_id+'" onclick="changeStatus('+st+','+order_id+')" style="cursor: pointer;color:blue">'+answ.next_status+'</a>')
            } else {
                $('#sled_st_'+order_id).parent().html('')
            }
        }
    });
};

function higerCount(id) {
    $.ajax({
        url: '../m/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: {
            'task': 'higerCount',
            'id':id,
            'sum':$('#sum')[0].innerText,
        },
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
          console.log(req);
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (answ) {
            $('#count_'+id)[0].innerText = answ[0];
            $('#sum_'+id)[0].innerText = answ[1];
            $('#sum')[0].innerText = '$'+answ[2];

        }
    });
};

function lowerCount(id) {
    $.ajax({
        url: '../m/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: {
            'task': 'lowerCount',
            'id':id,
            'sum':$('#sum')[0].innerText,
        },
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (answ) {
            $('#count_'+id)[0].innerText = answ[0];
            $('#sum_'+id)[0].innerText = answ[1];
            $('#sum')[0].innerText = '$'+answ[2];
        }
    });
};

function deleteFromBasket(id) {
    $.ajax({
        url: '../m/Basket.php', // путь к php-обработчику
        type: 'POST', // метод передачи данных
        dataType: 'json', // тип ожидаемых данных в ответе
        data: {
            'task': 'deleteFromBasket',
            'id':id,
            'sum':$('#sum')[0].innerText,
        },
        error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
        },
        success: function (answ) {
            console.log(answ);
            if (answ!='0') {
                $('tbody').html(answ[0]);
                $('#sum')[0].innerText = '$' + answ[1];
            } else {
                $('#content').html('Ваша корзина пуста!')
            }
        }
    });
};

