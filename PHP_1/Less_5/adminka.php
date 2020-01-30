
<!-- Делаем админку для редактирования данных -->
<!-- Скрипт на Аяксе. Кликая на кн "Сохранить" -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> <!-- Импортируем jquery -->
<script>
	function f(id){ // Функция, запускаемая кнопкой "Сохранить", принимающая ID товара
        // alert(id); // Так можно проверить что оно возвращает
		var id_price = "price_"+id; // Получаем стоимость товара для возможности изменения (обращаемся к input по полученному id)
		var price = document.getElementById(id_price).value; // Теперь получаем саму стоимость
        // alert(price); // Так можно проверить что оно возвращает
		var query = "id="+id+"&price="+price; // Переменная для передачи на сервер (id и price)  "id=" - ключ, id - значение
        // Активируем Аякс
		$.ajax({ // Функция передает на сервер данные из нашего клиента
			type: "POST", // Тип данных - массивом POST (см файлик server.php)
			url: "server.php", // Содержимое этого файлика в самом низу
			data: query, // Указывем в виде передаваемых данных переменную, объявленную выше
			success: function(answer){
				alert(answer); // Сообщаем результат ответом
			}
		});

		
	}
</script>

<?php
// Делаем админку для редактирования данных
// Традиционная часть (см. index.php)
include "config.php";
$sql = "select * from shop";
$res = mysqli_query($connect,$sql);
// Делаем табличку, в которой будим выводить и редактировать данные
$form = "<table style='margin: 0 auto;text-align:center;' border='1' width='400'>";
// Делаем цикл, в котором данные оборачиваются в строки таблицы
while($data = mysqli_fetch_assoc($res)){ // Обходя, преобразовываем в массив и сохраняем в нем 
    // Не забываем дать каждому элементу уникальный ID-шник (input id='price_".$data['id']."') 
    $form.="<tr><td>".$data['title']."</td><td><input id='price_".$data['id']."' type='text' value=".$data['price']."></td>"; 
    // Рисуем ячейку с кнопкой, кликая на которую вызываем ф-ю "f"  (onclick='f..), описаную скриптом сверху
	$form.="<td><input onclick='f(".$data['id'].")' type='button' value='Сохранить'></td></tr>";
}
$form .="</table>"; // Закрываем табличку
echo $form; // Выводим на экран

?>

<!-- Содержимое файлика server.php -->
<?php
include "config.php"; // Импортируем данные для коннекта
// Делаем на сервере запрос с апдейтом и получить данные из нашего клиента
$id = $_POST['id']; // Переменная, переданная на сервер (id и price)
$price = $_POST['price']; // Переменная, переданная на сервер (id и price)
// Теперь, когда id и price получены, делаем запрос
$sql = "update shop set price=$price where id=$id"; // Обновить табл shop, установить значение price переменной $price там, где id равно переменной $id
if(mysqli_query($connect,$sql)){ // Если все хорошо, то сообщаем об этом
    echo "Data success updated!";
}