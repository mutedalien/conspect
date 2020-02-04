<?php
session_start();
$salt = "jkh5dghg3har781ghgha48"; // Соль
$connect = mysqli_connect("localhost", "root", "", "shop");
//  Если не пустой, то бреем теги. Иначе пустое значение
$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";  
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";
$pass = md5($pass).$salt; // Лепим к паролю лоль и шифруем их вместе
//  Выбираем все значения таблицы users, где логин равен $login и пароль равен $pass
$sql = "select * from users where login = '$login' and pass = '$pass'"; 
//  Запрос
$res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));
/* Если в результате что-то есть, то сохраняем куки и переходим на index.php
 с сообщением об успешн авторизации. Иначе дохнем с сообщением об ошибке */
if(misqli_num_rows($res)>0){
    $_SESSION["login"] = $login;
    $_SESSION["pass"] = $pass;
    echo "Вы авторизованы!";
else{
    echo "Ошибка авторизации!";
}