<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.04.17
 * Time: 1:27
 */
session_start();

header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');

if (count($_FILES)) {
    $upload_path = 'tests/questions/';
    if (!($_FILES['test']['type'] === "application/json")) {
        echo "Ошибка. Неверный формат файла. Загружайте файл в формате JSON";
        die;
    }

    $test_dir = scandir("tests/questions/");

    $count = count($test_dir) - 1;
    $file_name = $count.".json";

    $tmp_file = $_FILES['test']['tmp_name'];
    header( "refresh:5;url=list.php" );
    move_uploaded_file($tmp_file, $upload_path.$file_name);


    echo "<h2>Тест загружен. Вы будете перенаправлены к списку тестов.</h2>";
    echo "<h2>Нажмите <a href='list.php'>сюда</a>, чтобы перейти сразу.</h2>";
    exit;
}
?>

<form method="post" enctype="multipart/form-data">
    <h2>Загрузите ваш тест, вы же Админ!</h2>
    <input type="file" name="test"><br/>
    <button>Загрузить</button>

</form>

































