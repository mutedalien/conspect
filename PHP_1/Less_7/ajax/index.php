<?php
session_start();
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> <!-- Импортируем jquery -->
<script>
	function f(){ // Функция, запускаемая кнопкой "Войти", принимающая значение
        var login = $("#login").val(); // Эта инструкция принимает значение атрибута value (что ввели в поле "логин") из нашего элемента
        var login = $("#pass").val(); // См выше
		var query = "login="+login+"&pass="+pass; // Переменная для передачи на сервер (login и pass)  "login=" - ключ, login - значение
        // Активируем Аякс
		$.ajax({ // Функция передает на сервер данные из нашего клиента
			type: "POST", // Тип данных - массивом POST (см файлик server.php)
			url: "server.php", // Содержимое этого файлика в самом низу
			data: query, // Указывем в виде передаваемых данных переменную, объявленную выше
			success: function(answer){
				$("h1").html(answer); //    В тек H1 помещаем значение, полученное от сервера
			}
		});
	}
</script>

<h1></h1> <!-- сюда вставится answer сверху -->
<p>Введите логин</p>
    <input type="text" name="login" value="<?$_SESSION['login']?>"> <!-- Проверяем наличие уже сохраненных в куках паролей -->
    <p>Введите логин</p>
    <input type="password" name="pass" value="<?$_SESSION['login']?>"><br><br>
    <input type="button" onclick="f()" value="Войти"> <!-- button, в отличии от submit, не перезагр страничку -->