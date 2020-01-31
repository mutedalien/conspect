<?php
//print_r($_FILES);
if($_FILES['photo']['size'] > 100000){ //   photo - это имя файла. Ограничиваем размер в байтах
    die("Файл превышает допустимый размер!");
}
else{
    $path = "files/".$_FILES['photo']['name']; //   Указываем файлу каталог и возвращаем прежнее имя
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){ //  Откуда переносим и куда
        echo "Файл ".$_FILES['photo']['name']." успешно загружен!";
    }
}