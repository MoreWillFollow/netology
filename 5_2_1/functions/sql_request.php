<?php



function sqlRegNewUser ($login, $password) {
    $pdo = new PDO("mysql:host=localhost; dbname=clvrdgtl_neto42", "clvrdgtl_neto42", "netology2017", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $sql = "INSERT INTO user (login, password) VALUES (:login, :password)";
    $sql = $pdo->prepare($sql);
    $sql->bindParam(':login', $login, PDO::PARAM_STR);
    $sql->bindParam(':password', $password, PDO::PARAM_STR);
}