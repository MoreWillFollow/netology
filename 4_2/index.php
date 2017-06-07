<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.06.17
 * Time: 19:14
 */
ob_start();
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);



$pdo = new PDO("mysql:host=localhost; dbname=clvrdgtl_neto42", "clvrdgtl_neto42", "netology2017", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM tasks ORDER BY is_done";
$dlt = $pdo->prepare("DELETE FROM tasks WHERE id=?");
$done = $pdo->prepare("UPDATE tasks SET is_done=1 WHERE id=?");
$add = $pdo->prepare("INSERT INTO tasks (description) VALUES (?)");
?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="normalize.css" rel="stylesheet" type="text/css">
</head>
<body>


<h1>Список дел</h1>

<form>
    <label class="task_adder">
        <input type="text" name="new_task">
        <input type="submit" name="add" value="Добавить задачу">
    </label>

</form>

<table>
    <tr>
        <th>Описание</th>
        <th>Время добавления</th>
        <th>Статус</th>
        <th>Действие</th>

    </tr>

    <?

    foreach ($pdo->query($sql) as $row) {

            if ($row['is_done'] == 0) {
                $status = "В процессе";
                $status_class = "current";
            }
            elseif ($row['is_done'] ==1) {
                $status = "Выполнено";
                $status_class = "done";
            }
            else {
                echo "<h1>Some error...</h1>";
                die();
            }

        echo "<tr>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['date_added']."</td>";
        echo "<td class=\"".$status_class."\">".$status."</td>";
        echo "<td> 
                    <a href=\"?id=".$row["id"]."&action=delete\">Удалить</a> 
                    <a href=\"?id=".$row["id"]."&action=edit\">Изменить</a>
                    <a href=\"?id=".$row["id"]."&action=done\">Выполнено</a>
  
             </td>";
        echo "</tr>";
    }






    if (isset($_GET["action"]) and $_GET["action"] == "delete") {
        $dlt->execute([
            (string)($_GET["id"])
        ]);
        header('Location: http://clvrdgtl.com/l/PHP/4_2/index.php');

    }

    if (isset($_GET["action"]) and $_GET["action"] == "done") {
        $done->execute([
            (string)($_GET["id"])
        ]);
        header('Location: http://clvrdgtl.com/l/PHP/4_2/index.php');

    }

    if (isset($_GET["new_task"]) and !empty($_GET["new_task"])) {
        $add->execute([
            (string)($_GET["new_task"])
        ]);
        header('Location: http://clvrdgtl.com/l/PHP/4_2/index.php');

    }

    ob_end_flush();
    ?>

</table>

</body>
</html>
