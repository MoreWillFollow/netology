<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.06.17
 * Time: 0:48
 */

session_start();

?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="main.css" type="text/css" rel="stylesheet">
</head>
<body>
<form method="POST" action="enter.php">
    <label>
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="submit" name="sign_in" value="Вход или регистрация">
    </label>
</form>
</body>
</html>
