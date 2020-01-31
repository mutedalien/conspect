<?php
$url = "http://site.ru/demo/index.php";

echo basename($url); // Вернет: index.php

$mas = pathinfo($url); // Вернет массив с dirname, basname, extension, filename
print_r($mas);
