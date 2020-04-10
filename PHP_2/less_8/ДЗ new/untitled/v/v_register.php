<?php
?>

<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Регистрация</h5>
          <form class="form-signin" method="post">
            <div class="form-label-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Имя" required autofocus>
              <label for="inputEmail">Ваше Имя</label>
            </div>

            <div class="form-label-group">
              <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required autofocus>
              <label for="inputEmail">Ваш Логин</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required>
              <label for="inputPassword">Ваш Пароль</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="Пароль ещё раз" required>
              <label for="inputPassword">Подтвердите Пароль</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Зарегистрироваться</button>
            <hr class="my-4">
            {% if (passMatch == false) and (passMatch is not null) %}
            <div class="alert alert-danger">Пароль не совпадает!</div>
            {% endif %}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>