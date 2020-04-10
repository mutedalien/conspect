<?php
session_start();
$_SESSION['idInBasket'];
//session_destroy();

session_write_close();

require_once 'autoload.php';

try {
  App::init();
} catch (PDOException $e) {
  echo "DB is not available";
//  var_dump($e->getTrace());
  echo $e->getMessage();

//    echo $e->getMessage();
} catch (Exception $e) {
  // var_dump($e->getTrace());

  echo $e->getMessage();
}
//$_SESSION['isAuth'] = false;
//var_dump($_SESSION['isAuth']);
//var_dump($_SESSION['name']);
//echo 12;
//print_r($_SESSION['idInBasket']);
//print_r($_SESSION['countByID']);
//print_r(array_count_values($_SESSION['idInBasket']));
//print_r($_SESSION);

