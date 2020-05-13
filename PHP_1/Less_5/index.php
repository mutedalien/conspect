<?php

include "config.php"; // Импортируем данные из config.php
$sql = "select * from shop"; // Присваиваем переменной $sql все из таблички shop

$res = mysqli_query($connect,$sql); // Запускаем запрос на сервере и сохраняем его в переменную $res
// Теперь обойдем весь результат ($res)
while($data = mysqli_fetch_assoc($res)){ // Обходя, преобразовываем в массив и сохраняем в нем 
    echo "Автомобиль ".$data['title']." стоит ".$data['price']."<br>"; // Выводим результат
}