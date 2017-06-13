<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.06.17
 * Time: 11:14
 */
error_reporting(E_ALL);

if (isset($_POST) and !empty($_POST)) {

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
        $sql = ( "CREATE TABLE IF NOT EXISTS coool (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )");

        // use exec() because no results are returned
        $pdo->exec($sql);
        unset($_POST);

        header('Location: list.php');
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $pdo = null;
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 4.4</title>
</head>
<body>

<form method="POST">
    <label>
        <input type="submit" name="OK" title="Нажмите, чтобы создать новую таблицу" value="Создать новую таблицу через PHP">
    </label>
</form>
</body>
</html>


<?

?>