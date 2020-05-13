<?php
// подключение к бд
try {
    $dbh = new PDO('mysql:dbname=gallery;host=localhost', 'root', '');
} catch (PDOException $e) {
    echo "Error: Could not connect. " . $e->getMessage();
}

// установка error режима
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// выполняем запрос
try {
    // формируем SELECT запрос
    // в результате каждая строка таблицы будет объектом
    $sql = "SELECT * FROM `images_list` WHERE 1 ORDER BY NAME";
    $sth = $dbh->query($sql);
    while ($row = $sth->fetchObject()) {
        $data[] = $row;
    }
    // закрываем соединение
    unset($dbh);
} catch (Exception $e) {
    'Error: ' . $e->getMessage();
}