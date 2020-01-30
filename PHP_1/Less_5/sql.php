<?php

// Пример подключения к базе
$link=mysqli_connect("localhost", "my_user", "my_password", "db"); // Функция mysqli_connect служит для подключения к бд
if (mysqli_connect_errno()){ // Функция mysqli_connect_errno служит для проверки. В случае отказа возвращает номер ошибки
    die ("Connect failed: " .mysqli_connect_error*());
}
// Пример запроса:
$query=mysqli_query($link, "SELECT * FROM table"); // Запрашиваем все из table
$array=mysqli_fetch_assoc($query); // Функция mysqli_fetch_assoc позволяет получить данные из базы в виде массива