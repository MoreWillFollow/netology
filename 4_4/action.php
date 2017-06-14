<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.06.17
 * Time: 18:56
 */
session_start();
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] !== 'POST') {
    header('HTTP/1.0 400 Not Found');
    echo "Страница не найдена";
    die;
} else {
    header('Content-Type: text/html; charset=utf-8');
}
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

$servername = "localhost";
$username = "clvrdgtl_neto44";
$password = "netology2017";
$dbname = "clvrdgtl_neto44";

//DROP TABLE

if (isset($_POST["delete"]) and !empty($_POST["delete"]) and isset($_SESSION["table_name"]) and !empty($_SESSION["table_name"]) and isset($_POST["field_to_delete"]) and !empty($_POST["field_to_delete"])) {

    $table_from_delete = (string)$_SESSION["table_name"];
    $field_to_delete = (string)$_POST["field_to_delete"];

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $dlt = $pdo->prepare("ALTER TABLE `$table_from_delete`  DROP COLUMN `$field_to_delete`");
        $dlt->execute();
        unset($_POST);
        header("Location: list.php");
    }

    catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
        echo "Ошибка. Поле отсутствует";

    }

}

//RENAME TABLE

if (isset($_POST["rename"]) and !empty($_POST["rename"]) and isset($_SESSION["table_name"]) and !empty($_SESSION["table_name"]) and isset($_POST["field_to_delete"]) and !empty($_POST["field_to_delete"])) {

    $table_name = (string)$_SESSION["table_name"];
    $field_to_rename = (string)$_POST["field_to_rename"];
    $new_name = (string)$_POST["new_name"];

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $dlt = $pdo->prepare("ALTER TABLE `$table_name`  CHANGE `$field_to_rename` `$new_name` INT(11) NOT NULL");
        $dlt->execute();
        unset($_POST);
        header("Location: list.php");
    }

    catch (PDOException $e) {
        header("Location: list.php");
    }

}

//CHANGE TYPE

if (isset($_POST["type_change"]) and !empty($_POST["type_change"]) and isset($_POST["field_type"]) and !empty($_POST["field_type"]) and isset($_SESSION["table_name"]) and !empty($_SESSION["table_name"]) and isset($_POST["field_to_update"]) and !empty($_POST["field_to_update"])) {

    $table_name = (string)$_SESSION["table_name"];
    $field_to_update = (string)$_POST["field_to_update"];
    $new_type = (string)$_POST["field_type"];

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $dlt = $pdo->prepare("ALTER TABLE `$table_name` MODIFY `$field_to_update` $new_type (6) NOT NULL");

        $dlt->execute();
        unset($_POST);
        header("Location: list.php");
    }

    catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
        header("Location: table_view.php");

    }

}





/*if ($dlt->($pdo)) {
    echo "OK, id is DELETED";
}
else {
    echo "ERROR";
}*/

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";


echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/


/*$dlt = $pdo->prepare("ALTER TABLE ? DROP COLUMN ?;");
$dlt ->execute([
    (string)($_SESSION["table_name"]),
    (string)($_POST["table_to_delete"])
]);*/

/*$edt;
$chng;*/
//DELETE table
/*if ($dlt->execute()) {
    header("Location: list.php");
}
else {
    echo "ERROR!";
}
*/










?>






<?php
