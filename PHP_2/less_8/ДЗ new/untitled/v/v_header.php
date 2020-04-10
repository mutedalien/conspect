<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="v/style.css">
    <title>EV Chargers Galery</title>
</head>
<body>
<header>
  <a class="btn btn-warning cart_btn" href="index.php?c=cart&act=cart" role="button">
    Корзина&nbsp;
  {% if cart_count > 0 %}
  <span class="cart-count">{{ cart_count }}</span>
  {% endif %}
  </a>
  {% if isAuth %}
    <div class="user-cabinet-div">
      <span class="user_link">Здравствуйте, {{ user }}</span>
      <a class="btn btn-primary user-cabinet-btn" href="index.php?c=user&act=cabinet" role="button">
      Личный кабинет
      </a>
    </div>
  {% else %}
    <span class="guest_link">Здравствуйте, Гость. <a href="index.php?c=user&act=auth">войдите</a> или <a href="index.php?c=user&act=register">зарегистрируйтесь</a></span>
  {% endif %}

  <span class="content_span">{{ title }}</span>
</header>