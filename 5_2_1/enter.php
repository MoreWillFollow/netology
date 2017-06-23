<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.06.17
 * Time: 23:01
 */
/*echo "Что-то пошло не так";
echo "<br>THIS IS POST:<br><pre>";
print_r($_POST);
echo "</pre>";
echo "<br>THIS IS SESSION:<br><pre>";
print_r($_SESSION);
echo "</pre>";
error_reporting(E_ALL);*/

session_start();
include "autoloader.php";


if (isset($_POST["login"])) {$_SESSION["login"] = $_POST["login"];};
if (isset($_POST["password"])) {$_SESSION["password"] = $_POST["password"];};

if (isset($_SESSION["login"]) and !empty($_SESSION["login"])) {

$pdo = new PDO("mysql:host=localhost; dbname=clvrdgtl_neto42", "clvrdgtl_neto42", "netology2017", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM user WHERE login=?";

$user = $pdo->prepare($sql);
$user->execute([$_SESSION["login"]]);
$user = $user->fetch();

if (isset($user["login"]) and !empty($user["login"]) and $_SESSION["password"] === $user["password"]) {
    $_SESSION["login"] = $user["login"];
    header('Location: http://clvrdgtl.com/l/PHP/5_2/tasks.php');
}
else {
    $request = new sqlRegNewUser();
    $request->newUser($_SESSION["login"], $_SESSION["password"]);
    header('Location: http://clvrdgtl.com/l/PHP/5_2/tasks.php');
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
</html>

