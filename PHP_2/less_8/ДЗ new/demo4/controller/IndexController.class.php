<?php

class IndexController extends Controller
{
  public $view = 'index';
  public $title;
  public $index;

  public function __construct()
  {
    parent::__construct();
    $this->title .= ' | Главная';
    $this->index = new Index();
  }

  //метод, который отправляет в представление информацию в виде переменной content_data
  public function index($data)
  {
    return $this->index->list();
  }

  public function list($data)
  {

    return $this->index->list();
  }

  public function oneGoods()
  {
    return $this->index->perOne();
  }
}
