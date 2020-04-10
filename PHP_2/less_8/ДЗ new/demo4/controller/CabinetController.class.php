<?php

class CabinetController extends Controller
{
  public $view = 'cabinet';
  public $title;
  public $index;
  public $basket;
  public $total = 0;
  public $res;

  public function __construct()
  {
    parent::__construct();
    $this->title .= ' | Кабинет';
    $this->cabinet = new Cabinet();
  }

  //метод, который отправляет в представление информацию в виде переменной content_data
  public function index($data)
  {

    return ['data' => $this->cabinet->index(),
      'isAdmin' => $_SESSION['role']];

  }

  public function list()
  {

    return ['data' => $this->cabinet->index(),
      'isAdmin' => $_SESSION['role']];
  }


}
