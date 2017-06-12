<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.06.17
 * Time: 11:14
 */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);

$table_name = "Cool Table";
$servername = "localhost";
$username = "clvrdgtl_neto44";
$password = "netology2017";
$dbname = "clvrdgtl_neto44";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = ( "CREATE TABLE IF NOT EXISTS YES (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )");

    // use exec() because no results are returned
    $pdo->exec($sql);

    echo "Таблица создана. Обновите еще раз, чтобы создать новую таблицу<br>";
    echo "<a href='list.php'>Список таблиц</a>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$pdo = null;