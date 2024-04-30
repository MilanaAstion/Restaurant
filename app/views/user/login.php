<?php 
    include "alert.php";
?>
<form class="login-form" action="/user/login" method="POST">
    <label for="">Логін</label>
    <input type="text" name="login">
    <label for="">Пароль</label>
    <input type="password" name="pass">
    <button type="submit" class="btn">Вхід</button>
</form>