<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.06.17
 * Time: 23:01
 */
error_reporting(E_ALL);

session_start();






$thisis = isset($_POST["login"]);

if (isset($_SESSION["login"]) and !empty($_SESSION["login"])) {

$pdo = new PDO("mysql:host=localhost; dbname=clvrdgtl_neto42", "clvrdgtl_neto42", "netology2017", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM user WHERE login=?";

$user = $pdo->prepare($sql);
$user->execute([$_POST["login"]]);
$user = $user->fetch();

if (isset($user["login"]) and !empty($user["login"]) and $_POST["password"] === $user["password"]) {
    $_SESSION["login"] = $user["login"];
    header('Location: http://clvrdgtl.com/l/PHP/4_3/tasks.php');
}
}


