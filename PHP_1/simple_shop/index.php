<?php
?>

<html>
  <head><title>Первая страница на php</title></head>
  <body>
    <?php
      echo 'Hello, world!<br>';
      echo '2 + 5 = ';
      echo (2 + 5);
    ?>

 <?php
  $host = 'localhost';  // Хост, у нас все локально
  $user = 'user_bd';    // Имя созданного вами пользователя
  $pass = '15975321'; // Установленный вами пароль пользователю
  $db_name = 'my_db';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

  // Ругаемся, если соединение установить не удалось
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
<br>

<?php
  $sql = mysqli_query($link, 'SELECT `ID`, `Name`, `Price` FROM `products`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['Name']}: {$result['Price']} рублей<br>";
  }
?>

  </body>
</html>

