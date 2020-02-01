<?php
//print_r($_POST);
if($_POST['correct'] == $_POST['user']){ // Проверяем правильность капчи
    //echo "Succsess";

    //print_r($_FILES);

    for ($i=0; $i < count($_FILES['photo']['name']); $i++) { // Цикл для загр файлов в папку на сервере
        $path = "files/".$_FILES['photo']['name'][$i]; // Путь к папке, куда сохранять
        if(move_uploaded_file($_FILES['photo']['tmp_name'][$i], $path)){ // Если файлы благополучно перенеслись из временной папки в $path, то...
            echo "Файл ".$_FILES['photo']['name'][$i]." успешно загружен<br>";
            // Не забываем создать папку files на сервере
        }
    }
}
else {
    header("Location: index.php?error");
}

//$fio = (isset($_POST['fio']) ? strip_tegs($_POST['fio']) : ""); // Если заполнен fio, то применяем к нему strip_tegs и обрезаем теги. 
//$id = (isset($_GET['id']) ? (int) ($_GET['id']) : ""); // Если заполнен id, то приводим его к числовому значению
