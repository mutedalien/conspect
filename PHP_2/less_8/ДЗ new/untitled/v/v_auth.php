<?php
?>

<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Авторизация</h5>
          <form class="form-signin" method="post">
            <div class="form-label-group">
              <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required autofocus>
              <label for="inputEmail">Ваш Логин</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required>
              <label for="inputPassword">Ваш Пароль</label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember_pass">
              <label class="custom-control-label" for="customCheck1">Запомнить пароль</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Войти</button>
            <hr class="my-4">
            {% if status != '' %}
            <div class="alert alert-danger">{{status}}
            {% endif %}
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>