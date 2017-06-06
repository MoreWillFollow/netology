<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.04.17
 * Time: 16:55
 */

header('Content-Type: text/html; charset=UTF-8');

$dir_files = scandir("tests/questions/");

$k = count($dir_files);
$i = 0;
$n = 0;
while ($i < $k) {
    if ($dir_files[$i] === '.' || $dir_files[$i] === "..") {
        ++$i;
        continue;
    }
    ++$n;
    echo "<a href=\"test.php?test_number=" .$n. "\">Тест номер ".$n."</a><br>";
    ++$i;
}
session_destroy();

?>