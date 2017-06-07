<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.06.17
 * Time: 17:04
 */


header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);



$pdo = new PDO("mysql:host=localhost; dbname=clvrdgtl_netolo", "clvrdgtl_netolo", "netology2017", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM books";
?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="normalize.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1>Библиотека успешного человека</h1>

<table>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Год выпуска</th>
        <th>Жанр</th>
        <th>ISBN</th>
    </tr>

    <?

    foreach ($pdo->query($sql) as $row) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['author']."</td>";
        echo "<td>".$row['year']."</td>";
        echo "<td>".$row['genre']."</td>";
        echo "<td>".$row['isbn']."</td>";
        echo "</tr>";
    }

    ?>

</table>

</body>
</html>
