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

    foreach ($pdo->query($sql) as $row =>$table_name) {
        $table_list[] = $table_name[0];

    }
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="normalize.css" type="text/css">
</head>
<body>
<table>
    <tr>
        <th>#</th>
        <th>Название таблицы</th>
    </tr>

    <?
    $i = 1;
    foreach ($table_list as $key=>$value) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
        $i++;
    }

    ?>

</table>
</body>
</html>
