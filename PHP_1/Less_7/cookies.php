<?php
/*
//  Устанавливаем Cookie до конца сессии:
SetCookies("Test", "Value");
//  Устанавливаем Cookie на один час после установки:
SetCookies("My_Cookie", "Value", time()+3600); //   3600 - секунд в часе
*/

if(setcookie("fio", "Ivanov")) {
    echo "ok";
}
/*
//  Создаем файлик test.php со следующим содержанием:
<?php
echo "Welcome ".$_COOKIE['fio']; // Выведет: Welcome Ivanov
*/
?>
