<!-- page #1 -->
<?php
/* Сессии, в отличии от кукисов, хранятся не на клиенте а на сервере
и живут, пока клиент не закроет окно браузера */
session_start(); // Функция session_start объявляется в начале файла, если в коде будут обращения к сессионным переменным
echo 'Welcome to page #1';
//  Образец сессионных переменных
$_SESSION['favcolor'] = 'green';
$_SESSION['animal'] = 'cat';
$_SESSION['time'] = time();
?>
<!-- page #2 -->
<?php
session_start();
echo 'Welcome to page #2';

echo $_SESSION['favcolor'];
echo $_SESSION['animal'];
echo date('d-m-Y', $_SESSION['time']);
?>