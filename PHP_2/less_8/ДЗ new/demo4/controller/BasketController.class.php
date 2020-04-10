<?php

class BasketController extends Controller
{
  public $view = 'basket';
  public $title;
  public $index;
  public $basket;
  public $total = 0;
  public $res;

  public function __construct()
  {
    parent::__construct();
    $this->title .= ' | Корзина';
    $this->basket = new Basket();
  }

  //метод, который отправляет в представление информацию в виде переменной content_data
  public function index($data)
  {
//    print_r($this->basket->prep());
    return ['item' => $this->basket->prep(),
      'total' => $_SESSION['total']];
  }


  public function renderBasket($data)
  {

    return $this->index('null');

  }

  public function toBasket($data)
  {
    session_start();
    if (isset($_POST['good'])) {
      $_SESSION['idInBasket'][] = $_POST['good'];
    }
    if (!empty($_SESSION['idInBasket'])) {
      return count($_SESSION['idInBasket']);

    } else {
      return 0;
    }
  }

  public function order()
  {
    if ($_SESSION['isAuth']) {
      return $this->basket->order();
    } else {
      $this->orderNotReg();
    }
  }

  public function orderNotReg()
  {
    return $this->basket->orderNotReg();
  }


}
