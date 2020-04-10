<?php

class Login
{
  public $user_id;
  public $user_login;
  public $user_name;
  public $user_password;

  public function __construct()
  {
//    $_SESSION['isAuth'] = false;

  }

  public function login($name, $password)
  {
    $user = db::getInstance()->Select("SELECT * FROM users where name = '$name';");
    if ($user) {
      if (password_verify($password, $user['pass'])) {

        session_start();
        $_SESSION['isAuth'] = true;
        $_SESSION['name'] = $user['name'];
        $_SESSION['nameID'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        session_write_close();
        header("Location: index.php");
        return "Вход прошёл успешно";
      } else {
        return "Пароль не подходит";
      }
    } else {
      return "Такого пользователя нет";
    }
  }

  public function reg($login, $password)
  {
    $user = db::getInstance()->Select("SELECT * FROM users where name = '$login';");
    if (!$user) {
      $query = "INSERT INTO `catalog`.`users` (`name`, `login`, `pass`) VALUES ('" . $login . "', '" . $login . "', '" . $this->pass($password) . "')";
    } else {
      return "Пользователь с таким логином уже существует";
    }
    db::getInstance()->Query($query);
    $userID = db::getInstance()->Select("SELECT * FROM users where name = '$login';");
    session_start();
    $_SESSION['isAuth'] = true;
    $_SESSION['name'] = $login;
    $_SESSION['nameID'] = $userID['id'];
    $_SESSION['role'] = $userID['role'];
    session_write_close();
    header("Location: " . $_SERVER['PHP_SELF']);

  }

  public function regNot($login, $password)
  {
    if (!empty($_POST['name'])) {
      $query = "INSERT INTO `catalog`.`users` (`name`, `login`, `pass`) VALUES ('" . $login . "', '" . session_id() .
        "', 'NotRegister')";
      db::getInstance()->Query($query);
      $userID = db::getInstance()->Select("SELECT * FROM users where login = '" . session_id() . "';");
      session_start();
//    $_SESSION['name'] = $login;
      $_SESSION['nameID'] = $userID['id'];
      session_write_close();
//    header("Location: " . $_SERVER['PHP_SELF']);
    } else {
      return "Введите имя";
    }

  }

  public function pass($password)
  {
    return password_hash($password, PASSWORD_BCRYPT);
  }


}
