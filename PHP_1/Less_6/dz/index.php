<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="main">
        <h3>Наша галерея</h3><br>
        <div class="list">
            <?php
            $sqltable = 'main';
            include 'showimages.php';
            ?>
        </div>
        <h3>Загруженные вами изображения</h3><br>
        <div class="list">
            <?php
            $sqltable = 'uploaded';
            include 'showimages.php';
            ?>
        </div>
    </div>
    <div class="form">
         <form enctype="multipart/form-data" action="handler.php" method="POST">
             <p><b>Загрузка файла</b></p>
             <input name="userfile" type="file" required><br><br>
             <p><input type="submit" value="Загрузить"></p>
         </form>
         <form enctype="multipart/form-data" action="showidpic.php" method="GET">
             <br><p><b>Открыть фото с id:</b></p>
             <input name="id" type="number" value="1" style="width: 40px;"><br>
             <p><input type="submit" value="Показать"></p>
         </form>
    </div>            
</body>
</html>