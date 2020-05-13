<?php
if($_GET['success']):?>  <!-- Сообщение об успешной авторизации -->
    <h1>Ваша учетная запись корректна!</h1>
<?php endif;?>

<form action="server.php" method="post">
    <p>Введите логин</p>
    <input type="text" name="login" value="<?$_COOKIE['login']?>"> <!-- Проверяем наличие уже сохраненных в куках паролей -->
    <p>Введите логин</p>
    <input type="password" name="pass" value="<?$_COOKIE['login']?>"><br><br>
    <input type="submit" value="Войти">
</form>