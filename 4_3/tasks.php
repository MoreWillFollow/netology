<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.06.17
 * Time: 19:14
 */
session_start();

header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);
$login = "anarnebiyev@gmail.com";


$pdo = new PDO("mysql:host=localhost; dbname=clvrdgtl_neto42", "clvrdgtl_neto42", "netology2017", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM task ORDER BY is_done";
$assignble = "SELECT login FROM user";
$dlt = $pdo->prepare("DELETE FROM task WHERE id=?");
$done = $pdo->prepare("UPDATE task SET is_done=1 WHERE id=?");
$add = $pdo->prepare("INSERT INTO task (description, assigned_user_id, user_id) VALUES (?,?,?)");
$edt = $pdo->prepare("UPDATE task SET description =? WHERE id =?");
$assigned_to = $pdo->prepare("SELECT * FROM task WHERE assigned_user_id=?");
$assign_to = $pdo->prepare("UPDATE task SET assigned_user_id=? WHERE id=?");
?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="normalize.css" rel="stylesheet" type="text/css">
</head>
<body>


<h1>Список дел</h1>

<form action="http://clvrdgtl.com/l/PHP/4_3/tasks.php">
    <label class="task_adder">
        <?
        if (isset($_GET["action"]) == "edit") {
            $_SESSION["id"] = $_GET["id"];
            echo <<<HTML
   <input type="text" name="edit_task">
   <input type="submit" name="edit" value="Сохранить изменения">
HTML;

        } else {
            echo <<<HTML
    <input type="text" name="new_task">
    <input type="submit" name="add" value="Добавить задачу">
HTML;

        }
        ?>
    </label>

</form>

<table>
    <tr>
        <th>Описание</th>
        <th>Время добавления</th>
        <th>Статус</th>
        <th>Действие</th>
        <th>Ответственный</th>
        <th>Автор</th>
        <th>Закрепить задачу за пользователем</th>

    </tr>

    <?
    if (isset($_GET["action"]) and $_GET["action"] == "delete") {
        $dlt->execute([
            (string)($_GET["id"])
        ]);
/*        header('Location: http://clvrdgtl.com/l/PHP/4_2/index.php');*/

    }

    if (isset($_GET["action"]) and $_GET["action"] == "done") {
        $done->execute([
            (string)($_GET["id"])
        ]);
/*        header('Location: http://clvrdgtl.com/l/PHP/4_2/index.php');*/

    }

    if (isset($_GET["edit_task"]) and !empty($_GET["edit_task"])) {
        $edt->execute([
            (string)($_GET["edit_task"]),
            (string)($_SESSION["id"])
        ]);
    }

    if (isset($_GET["new_task"]) and !empty($_GET["new_task"])) {

        $add->execute([
            (string)($_GET["new_task"]),
            (string)($login),
            (string)($login)

        ]);
/*        header('Location: http://clvrdgtl.com/l/PHP/4_2/index.php');*/

    }

    if (isset($_POST["assign"])) {
        $assign_to->execute([
            (string)($_POST["assigned_user_id"]),
            (int)($_GET["id"])
        ]);
    }



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

        $responsible = $row['assigned_user_id'];
        if ($row['assigned_user_id'] == $login) {
            $responsible = "Вы";
        }


        echo "<tr>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['date_added']."</td>";
        echo "<td class=\"".$status_class."\">".$status."</td>";
        echo "<td>  
                    <a href=\"?id=".$row["id"]."&action=edit\">Изменить</a>
                    <a href=\"?id=".$row["id"]."&action=delete\">Удалить</a>";
        if ($row['assigned_user_id'] === $login) {
            echo "      <a href=\"?id=".$row["id"]."&action=done\">Выполнено</a>
  
             </td>";
        }
        echo "<td>".$responsible."</td>";
        echo "<td>".$row['user_id']."</td>";
        echo "<td>";

?>

<form method="POST" action="?id=<? echo $row["id"];?>">
    <label>
<select name="assigned_user_id">
<?

        foreach ($pdo->query($assignble) as $assign_to) {
            echo "<option value=\"".$assign_to["login"]."\">".$assign_to["login"]."</option>";
        }

  ?>
</select>
<input type="submit" name="assign" value="Переложить ответственность">
</label>
</form>

<?php
        echo "</td>";
        echo "</tr>";

    }
    ?>

</table>

<h2>От вас требуют</h2>
<table>
    <tr>
        <th>Описание</th>
        <th>Время добавления</th>
        <th>Статус</th>
        <th>Действие</th>
        <th>Ответственный</th>
        <th>Автор</th>

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

    if ($row['assigned_user_id'] == $login) {
        continue;
    }

    echo "<tr>";
    echo "<td>".$row['description']."</td>";
    echo "<td>".$row['date_added']."</td>";
    echo "<td class=\"".$status_class."\">".$status."</td>";
    echo "<td>  
                    <a href=\"?id=".$row["id"]."&action=edit\">Изменить</a>
                    <a href=\"?id=".$row["id"]."&action=delete\">Удалить</a>
                    <a href=\"?id=".$row["id"]."&action=done\">Выполнено</a>
  
             </td>";
    echo "<td>".$responsible."</td>";
    echo "<td>".$row['user_id']."</td>";

    echo "</tr>";

}
?>
</table>


<?
/*echo "<pre>";
var_dump($_GET);
echo "</pre>";*/

?>
</body>
</html>
