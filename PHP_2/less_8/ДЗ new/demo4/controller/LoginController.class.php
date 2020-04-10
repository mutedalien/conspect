<?php

class LoginController extends Controller
{
  public $view = 'login';
  public $title;

  public function __construct()
  {
    parent::__construct();
    $this->title .= ' | Вход';

    if (isset($_SESSION["isAuth"])) {
      session_start();
      $_SESSION["isAuth"] = null;
      $_SESSION['name'] = null;
      $_SESSION['nameID'] = null;
      $_SESSION['role'] = null;

//      session_destroy();
      header("Location: index.php");
    }
  }

  //метод, который отправляет в представление информацию в виде переменной content_data
  public function index($data)
  {
    $reg = new Login();
//    print_r($_POST);

    if (!empty($_POST['login'])) {
      if (!empty($_POST['password'])) {
        if (isset($_POST["enter"])) {
          return $reg->login($_POST['login'], $_POST['password']);
        } elseif (isset($_POST["reg"]) && !empty($_POST['login']) && !empty($_POST['password'])) {

          return $reg->reg($_POST['login'], $_POST['password']);
        }
      } else {
        return "Ввведите пароль";
      }
    }


  }


}
