<?php
// Конфиг для соединения с сервером. Константы пишем большими буквами
const SERVER = "localhost"; // Адрес сервера
const LOGIN = "root"; // Логин
const PASS = ""; // Пароль (в данном случае без пароля)
const DB = "less05"; // Название базы данных

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or // Создаем здесь-же коннект
    die("Ошибка соединения с базой данных");