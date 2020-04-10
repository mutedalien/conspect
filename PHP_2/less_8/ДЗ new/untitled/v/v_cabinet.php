<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="cabinetLabel">Личный Кабинет</h5>
  </div>
  <div class="modal-body cabinet-content">
    <span>Ваше имя: {{user}}</span>
    <span>Ваш логин: {{_SESSION['user_login']}}</span>
    <span>{{user}}, добро пожаловать на наш сайт!</span>
    <span>Ваши последние посещённые страницы: <br></span>
    <div class="loglist">
      {% for action in lastActions %}
      <div class="loglist_action">
        <p>Дата: {{action['date']}}</p>
        <p>&nbsp;Страница: <a href="{{action['action']}}">{{action['action']}}</a></p>
      </div>
      {% endfor %}
    </div>
  </div>

  <div class="modal-footer">
    <a class="btn btn-info exitCart" href="index.php" role="button">Назад в галерею</a>
    <a class="btn btn-danger logout_btn" href="index.php?c=user&act=destroy" role="button">Выйти из аккаунта</a>
  </div>
</div>