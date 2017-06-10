<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.06.17
 * Time: 0:48
 */

session_start();
/*session_status();*/
/*echo session_status();*/

/*var_dump($_SESSION);*/
?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="main.css" type="text/css" rel="stylesheet">
</head>
<body>
<h3>Введите ваши данные. Вы либо войдете, либо вас насильно зарегситрирует и потом вы войдете :) </h3>
<form method="POST" action="enter.php">
    <label>
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="submit" name="sign_in" value="Вход или регистрация">
    </label>
</form>
</body>
</html>
