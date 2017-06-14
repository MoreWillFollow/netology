<html>
<head>
    <meta charset="UTF-8">
</head>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.06.17
 * Time: 15:55
 */
error_reporting(E_ALL);

include "classes/Car.php";



$obj = new Car();

$modificated = new Car();
$array = $modificated->yourCar("Зеленая", "3,2", "Откидной верх", "Офигенные");

echo "<pre>Стандартный вариант машины: <br>";
print_r($obj);
echo "</pre>";

echo "<pre>Модификация под заказ:<br>";
print_r($array);
echo "</pre>";


/*$obj = new Car();
$array = $obj->yourCar("Зеленая", "3,2", "Откидной верх", "Офигенные");

echo "<pre>";
print_r($array);
echo "</pre>";



echo "<pre>";
var_dump($obj);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($obj);
echo "</pre>";*/
