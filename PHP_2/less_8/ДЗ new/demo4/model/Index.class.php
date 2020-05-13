<?php


class Index
{
  public $user_id;
  public $user_login;
  public $user_name;
  public $user_password;
  public $limit;


  public function __construct()
  {
//    $_SESSION['isAuth'] = false;

  }

  public function list()
  {
    if (isset($_POST['action'])) {
      $this->limit = $_POST['action'];
      $this->limit += 3;
    } else {
      $this->limit = 3;
    }
    $list = db::getInstance()->SelectAll("SELECT * FROM goods LIMIT 1, $this->limit;");
//    print_r($list);
    return $list;

  }

  public function perOne()
  {
    $id = $_GET['id'];
    $list = db::getInstance()->Select("SELECT * FROM goods where id = $id");
//    print_r($list);
    return $list;

  }


}
