<!-- Форма отправки файла на сервер -->

<form action="server.php" method="post" enctype="multipart/form-data"> <!-- enctype - тот самый атрибут, указывающий, что надо передать файл на сервер -->
    <p>Выберите файл</p>
    <input type="file" name="photo"><br><br> <!-- Добавляем случайный тэг (имя) файлу -->
    <input type="submit" value="Сохранить"> <!-- Рисуем кнопку с типом submit -->
</form>