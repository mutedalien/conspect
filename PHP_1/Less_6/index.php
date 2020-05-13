<!-- Учимся передавать данные и файлы на сервер, защищая сервер от взлома -->
<?php
if(isset($_GET['error'])) {
    echo "Доступа нет!";
}
$x = rand(1, 10);
$y = rand(1, 10);
$z = $x + $y;
?>

<form action="server.php" method="post" enctype="multipart/form-data"> <!-- Метод "post" безопаснее, чем "GET". enctype загружает файлы на серв -->
    <p>Выберите файлы</p>
    <input type="file" name="photo[]" multiple accept="application/pdf"><br> <!-- photo[] - массив имен. multiple - множество. accept определяет тип загруж файлов (jpg, pdf, txt...) ru.wikipedia.org/wiki/Список_MIME-типов -->
    
    <input type="hiden" name="correct" value="<?=$z?>"> <!-- Скрываем предаваемое значение $z -->
    <p>Введите ФИО</p>
    <input type="text" name="fio">
    <p>Расскажите о себе</p>
    <textarea name="biogr" id="" cols="30" rows="10"></textarea>
    
    <p>Какие языки знаете</p>
    <input value="PHP" type="checkbox" name="lang[]">PHP<br> <!-- На сервер отправляется значение value -->
    <input value="JS" type="checkbox" name="lang[]">JS<br> <!-- Т.к. name указываем с [], то данные передаем массивом -->
    <input value="JAVA" type="checkbox" name="lang[]">JAVA<br>

    <p>Ваш город</p>
    <input value="Москва" type="radio" name="city">Москва<br>
    <input value="Муром" type="radio" name="city">Муром<br>

    <p>Ваш опыт работы</p>
    <select name="test">
        <option value="Менее 3 лет">Менее 3 лет</option>
        <option value="Более 3 лет">От 3 лет</option>
    </select>
    
    <p>День рожденья</p>
    <input type="date" name="bd"><br><br>
    <p>Вычислите: <?=$x?> + <?=$y?>  = <input type="text" name='user' style='widht:50px;'><br><br>
    <input type="submit" value="Отправить">

</form>