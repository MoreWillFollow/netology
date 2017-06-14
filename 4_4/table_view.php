<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.06.17
 * Time: 12:22
 */

session_start();

if ($_SERVER["REQUEST_METHOD"] !== 'POST') {
    header('HTTP/1.0 400 Not Found');
    echo "Страница не найдена";
}
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/


$servername = "localhost";
$username = "clvrdgtl_neto44";
$password = "netology2017";
$dbname = "clvrdgtl_neto44";
$table_name = $_POST["table"];
$_SESSION["table_name"] = $table_name;

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $stmt = $pdo->prepare("SELECT data_type, column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = ?");

    $table_data = [];
    $i = 0;
   if ($stmt->execute(array($table_name))){
        while ($row = $stmt->fetch()) {

/*            echo "<pre>";
            print_r($row);
            echo "</pre>";*/
          $i++;
          $table_data[$i]["data_type"] = $row["data_type"];
          $table_data[$i]["column_name"] = $row["column_name"];
        }
   }
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

/*
echo "<pre>";
print_r($table_data);
echo "</pre>";*/


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
            <th>Название поля</th>
            <th>Типа поля</th>
            <th>Действие с полями</th>
        </tr>
        <?
        $i=0;
        foreach ($table_data as $row) {
            $i++;
            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row["column_name"]?></td>
            <td><?=$row["data_type"]?></td>
            <td>
                <form method="POST" action="action.php">
                    <label>
                        <input type="hidden" name="field_to_delete" value="<?=$row["column_name"]?>">
                        <input type="submit" name="delete" value="Удалить">
                    </label>
                    <label class="renaming">
                        <input type="hidden" name="field_to_rename" value="<?=$row["column_name"]?>">
                        <input type="text" name="new_name">
                        <input type="submit" name="rename" value="Переименовать">
                    </label>
                    <label>
                        <select class="column_type" name="field_type">
                            <option title="Четырех-байтовое целое число, диапазон чисел со знаком от -2,147,483,648 до 2,147,483,647, диапазон чисел без знака от 0 до 4,294,967,295">INT</option>
                            <option selected="selected" title="Строка переменной длины (0-65,535), эффективная максимальная длина зависит от максимального размера строки">VARCHAR</option>
                            <option title="Столбец типа TEXT с максимальной длиной 65,535 (2^16 - 1) символов, сохраняется с двух-байтовым префиксом, указывающим длину значения в байтах">TEXT</option>
                            <option title="Дата, поддерживаемый диапазон от 1000-01-01 до 9999-12-31">DATE</option>
                            <optgroup label="Числовые"><option title="Одно-байтовое целое число, диапазон чисел со знаком от -128 до 127, диапазон чисел без знака от 0 до 255">TINYINT</option>
                                <option title="Двух-байтовое целое число, диапазон чисел со знаком от -32,768 до 32,767, диапазон чисел без знака от 0 до 65,535">SMALLINT</option>
                                <option title="Трех-байтовое целое число, диапазон чисел со знаком от -8,388,608 до 8,388,607, диапазон чисел без знака от 0 до 16,777,215">MEDIUMINT</option>
                                <option title="Четырех-байтовое целое число, диапазон чисел со знаком от -2,147,483,648 до 2,147,483,647, диапазон чисел без знака от 0 до 4,294,967,295">INT</option>
                                <option title="Восьми-байтовое целое число, диапазон чисел со знаком от -9,223,372,036,854,775,808 до 9,223,372,036,854,775,807, диапазон чисел без знака от 0 до 18,446,744,073,709,551,615">BIGINT</option>
                                <option disabled="disabled">-</option><option title="Число с плавающей точкой (M, D) - максимальное количество целых чисел (M) не должно превышать 65 (по умолчанию 10), максимальное количество десятичных (D) не должно превышать 30 (по умолчанию 0)">DECIMAL</option><option title="Малое число с плавающей точкой, допустимые значения от -3.402823466E+38 до -1.175494351E-38, 0, и от 1.175494351E-38 до 3.402823466E+38">FLOAT</option>
                                <option title="Число с плавающей точкой удвоенной точности, допустимые значения от -1.7976931348623157E+308 до -2.2250738585072014E-308, 0, и от 2.2250738585072014E-308 до 1.7976931348623157E+308">DOUBLE</option><option title="Синоним для DOUBLE (исключение: в режиме REAL_AS_FLOAT SQL будет синоним для FLOAT)">REAL</option>
                                <option disabled="disabled">-</option>
                                <option title="Тип поля-бит (M), сохранит M бит для значения (по умолчанию 1, максимум 64)">BIT</option>
                                <option title="Синоним для TINYINT(1), значение нуля предполагает false, ненулевые значения предполагают true">BOOLEAN</option>
                                <option title="Псевдоним для BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE">SERIAL</option>
                            </optgroup>
                            <optgroup label="Дата и время">
                                <option title="Дата, поддерживаемый диапазон от 1000-01-01 до 9999-12-31">DATE</option>
                                <option title="Совмещение даты и времени, поддерживаемый диапазон от " 1000-01-01="" 00:00:00"="" до="" "9999-12-31="" 23:59:59""="">DATETIME</option>
                                <option title="Временная метка, диапазон от " 1970-01-01="" 00:00:01"="" utc="" до="" "2038-01-09="" 03:14:07"="" utc,="" содержит="" количество="" секунд="" прошедших="" со="" времени="" ("1970-01-01="" 00:00:00"="" utc)"="">TIMESTAMP</option>
                                <option title="Время, диапазон от -838:59:59 до 838:59:59">TIME</option>
                                <option title="Год в четырехзначном (4, по умолчанию) или двухзначном (2) формате, допустимые значения от 70 (1970) до 69 (2069) или от 1901 до 2155 и 0000">YEAR</option>
                            </optgroup>
                            <optgroup label="Символьные">
                                <option title="Строка фиксированной длины (0-255, по-умолчанию 1), при хранении всегда дополняется пробелами в конце строки до заданной длины">CHAR</option>
                                <option selected="selected" title="Строка переменной длины (0-65,535), эффективная максимальная длина зависит от максимального размера строки">VARCHAR</option>
                                <option disabled="disabled">-</option>
                                <option title="Столбец типа TEXT с максимальной длиной 255 (2^8 - 1) символов, сохраняется с одно-байтовым префиксом, указывающим длину значения в байтах">TINYTEXT</option>
                                <option title="Столбец типа TEXT с максимальной длиной 65,535 (2^16 - 1) символов, сохраняется с двух-байтовым префиксом, указывающим длину значения в байтах">TEXT</option>
                                <option title="Столбец типа TEXT с максимальной длиной 16,777,215 (2^24 - 1) символов, сохраняется с трех-байтовым префиксом, указывающим длину значения в байтах">MEDIUMTEXT</option>
                                <option title="Столбец типа TEXT с максимальной длиной 4,294,967,295 или 4ГиБ (2^32 - 1) символов, сохраняется с четырех-байтовым префиксом, указывающим длину значения в байтах">LONGTEXT</option>
                                <option disabled="disabled">-</option>
                                <option title="Аналогичен типу CHAR, но предназначен для хранения бинарных байт-строк, вместо не бинарных символьных строк">BINARY</option>
                                <option title="Аналогичен типу VARCHAR, но предназначен для хранения бинарных байт-строк, вместо не бинарных символьных строк">VARBINARY</option>
                                <option disabled="disabled">-</option>
                                <option title="Столбец типа BLOB с максимальной длиной 255 (2^8 - 1) байт, сохраняется с одно-байтовым префиксом, указывающим длину значения">TINYBLOB</option>
                                <option title="Столбец типа BLOB с максимальной длиной 16,777,215 (2^24 - 1) байт, сохраняется с трех-байтовым префиксом, указывающим длину значения">MEDIUMBLOB</option>
                                <option title="Столбец типа BLOB с максимальной длиной 65,535 (2^16 - 1) байт, сохраняется с двух-байтовым префиксом, указывающим длину значения">BLOB</option>
                                <option title="Столбец типа BLOB с максимальной длиной 4,294,967,295 или 4ГиБ (2^32 - 1) байт, сохраняется с четырех-байтовым префиксом, указывающим длину значения">LONGBLOB</option>
                                <option disabled="disabled">-</option>
                                <option title="Перечисляемый тип данных, который может содержать максимум 65,535 различных величин или специальную величину ошибки ''">ENUM</option>
                                <option title="Единственное значение выбираемое из набора не более 64 членов">SET</option>
                            </optgroup>
                            <optgroup label="Пространственные">
                                <option title="Тип для хранения любого вида геометрических данных">GEOMETRY</option><option title="Точка в двухмерном пространстве">POINT</option>
                                <option title="Кривая с линейной интерполяцией между точек">LINESTRING</option>
                                <option title="Многоугольник">POLYGON</option>
                                <option title="Набор точек">MULTIPOINT</option>
                                <option title="Набор кривых с линейной интерполяцией между точек">MULTILINESTRING</option>
                                <option title="Набор многоугольников">MULTIPOLYGON</option>
                                <option title="Набор геометрических объектов любого типа">GEOMETRYCOLLECTION</option>
                            </optgroup>
                            <optgroup label="JSON">
                                <option title="Stores and enables efficient access to data in JSON (JavaScript Object Notation) documents">JSON</option>
                            </optgroup>
                        </select>
                        <input type="hidden" name="field_to_update" value="<?=$row["column_name"]?>">
                        <input type="submit" name="type_change" value="Назначить новый тип">
                    </label>
                </form>

            </td>
        </tr>



            <?php
        }
        ?>
    </table>


    </body>
    </html>

<?php
