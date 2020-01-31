<?php
// Скрипт, парсящий главную страницу BBC
$content = file_get_contents("https://www.bbc.com/news"); // Считываем данные в переменную $content
file_put_contents("demo.php",$content); // Отправляем данные в файл demo.php (файл создается автоматически)