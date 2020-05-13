<?php


class Basket
{
  public $res;
  public $total;

  public function __construct()
  {
    session_start();
    if (!empty($_SESSION['idInBasket'])) {
      $_SESSION['countID'] = array_count_values($_SESSION['idInBasket']);

    }
  }

  public function prep()
  {
    if (isset($_POST['count'])) {
      foreach ($_SESSION['idInBasket'] as $key => $value) {
        if ($_POST['flag'] == '-' && $_POST['count'] == $value) {
          session_start();
          unset($_SESSION['idInBasket'][$key]);
          break;
        } elseif ($_POST['flag'] == '+' && $_POST['count'] == $value) {
          session_start();
          $_SESSION['idInBasket'][] = $_POST['count'];
          break;
        }
      }
    }
    if (!empty($_SESSION['idInBasket'])) {
      $this->res = $this->render();

      foreach ($this->res as $keyRes => $valueRes) {
        foreach ($_SESSION['countID'] as $keyResID => $valueResID) {
          if ($valueRes['id'] == $keyResID) {
//          $res = ['count' => $valueResID];
            $this->total += $valueRes['price'] * $valueResID;
            $this->res[$keyRes] += array('count' => $valueResID);
            $this->res[$keyRes] += array('total' => $valueRes['price'] * $valueResID);
          }
        }
      }
    }
    session_start();
    $_SESSION['total'] = $this->total;
    return $this->res;
  }

  public function render()
  {
    $querry = "SELECT * FROM catalog.goods where  ID in (";
    foreach ($_SESSION['idInBasket'] as $key => $value) {
      $querry .= $value;
      $querry .= ", ";
    }
    $querry = substr($querry, 0, -2);
    $querry .= ');';
//    echo $querry;
    $list = db::getInstance()->SelectAll("$querry");
    return $list;

  }

  public function order()
  {
    $q = "INSERT INTO `order` (`idClient`, `idGood`, `count`) VALUES ";
    if (!empty($_SESSION['countID'])) {
      foreach ($_SESSION['countID'] as $key => $value) {
        $q .= "(" . $_SESSION['nameID'] . ', ' . $key . ', ' . $value . '), ';
      }
      $q = substr($q, 0, -2);
      $q .= ";";
//    echo $q;
      session_start();
//    print_r($_SESSION['idInBasket']);
      $res = db::getInstance()->Query("$q");
      if ($res) {
        $_SESSION['idInBasket'] = null;
        $_SESSION['countID'] = null;
        return "Ваш заказ успешно принят.";
      } else {
        return "Что то пошло не так. Свяжитесь с нами по телефону.";

      }
    }
  }

  public function orderNotReg()
  {
    $noReg = new Login();
    if (!empty($_POST['name'])) {
      $noReg->RegNot($_POST['name'], 1);
      return $this->order();
    } else {
      return "Введите имя";
    }

  }


}
