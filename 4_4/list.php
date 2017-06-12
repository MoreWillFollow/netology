<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.06.17
 * Time: 13:13
 */


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
    $sql = "SHOW TABLES FROM clvrdgtl_neto44";

    // use exec() because no results are returned

    var_dump($sql);


    foreach ($pdo->query($sql) as $row) {
        echo "<br>";
        echo $row;
        echo "<br>";

    }
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;