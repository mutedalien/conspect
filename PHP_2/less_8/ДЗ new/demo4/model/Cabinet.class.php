<?php


class CAbinet
{
  public $res;
  public $total;

  public function __construct()
  {

  }

  public function index()
  {

    $id = $_SESSION['nameID'];

    if ($_SESSION['role'] == 'admin') {
      $querry = "
      SELECT `order` . `id`, `order` . `count`, `order` . `date`, 
      `goods` . `nameFull`, goods . price,  
      `users`.`name`
      FROM `order` as `order` 
      JOIN users as users 
      JOIN goods as goods 
      WHERE `order` . idClient = `users` . id 
      and `order` . idGood = goods . id ";
    } else {
      $querry = "
      SELECT `order` . `id`, `order` . `count`, `order` . `date`, 
      `goods` . `nameFull`, goods . price,  
      `users`.`name`
      FROM `order` as `order` 
      JOIN users as users 
      JOIN goods as goods 
      WHERE `order` . idClient = `users` . id 
      and `order` . idGood = goods . id 
      and `order` . idClient = $id";
    }
    if (!empty($_POST['sort'])) {
      switch ($_POST['sort']) {
        case 'id':
          $querry .= ' order by id;';
          break;
        case 'name':
          $querry .= ' order by name;';
          break;
        case 'goodName':
          $querry .= ' order by nameFull;';
          break;
        case 'price':
          $querry .= ' order by price;';
          break;
        case 'count':
          $querry .= ' order by count;';
          break;
        case 'time':
          $querry .= ' order by date;';
          break;
        case 'idR':
          $querry .= ' order by id DESC;';
          break;
        case 'nameR':
          $querry .= ' order by name DESC;';
          break;
        case 'goodNameR':
          $querry .= ' order by nameFull DESC;';
          break;
        case 'priceR':
          $querry .= ' order by price DESC;';
          break;
        case 'countR':
          $querry .= ' order by count DESC;';
          break;
        case 'timeR':
          $querry .= ' order by date DESC;';
          break;
        default:
          $querry .= ';';
      }
    }

    $res = db::getInstance()->SelectAll($querry);
    return $res;

  }

  public function indexAdmin()
  {
    $id = $_SESSION['nameID'];
    if ($_SESSION['role'] == 'admin') {
      $querry = "
      SELECT `order` . `id`, `order` . `count`, `order` . `date`, 
      `goods` . `nameFull`, goods . price,  
      `users`.`name`
      FROM `order` as `order` 
      JOIN users as users 
      JOIN goods as goods 
      WHERE `order` . idClient = `users` . id 
      and `order` . idGood = goods . id ";
    } else {
      $querry = "
      SELECT `order` . `id`, `order` . `count`, `order` . `date`, 
      `goods` . `nameFull`, goods . price,  
      `users`.`name`
      FROM `order` as `order` 
      JOIN users as users 
      JOIN goods as goods 
      WHERE `order` . idClient = `users` . id 
      and `order` . idGood = goods . id 
      and `order` . idClient = $id";
    }
    $res = db::getInstance()->SelectAll($querry);
    return $res;
  }


}
