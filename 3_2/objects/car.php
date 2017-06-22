

<?php
error_reporting(E_ALL);
$obj_standart = new Car();
$ordered_car = new Car();
$tuning_car_full = new Car();
$tuning_car_color = new Car();
$tuning_car_disks = new Car();
$three_wheels_car = new Car();


$ordered_car->orderedCar("Зеленая", "3,2", "Откидной верх", "Офигенные");
$tuning_car_full->tuningCar("Фиолетовая", "Литые 21 дюймовые");
$tuning_car_color->tuningCarColor("Оражневая");
$tuning_car_disks->tuningCarDisks("С папеной 6-ки");
$three_wheels_car->wheels=3;


echo "<pre>Стандартный вариант машины: <br><b>";
print_r($obj_standart);
echo "</b></pre>";

echo "<pre>Трехколесная машинка: <br><b>";
print_r($three_wheels_car);
echo "</b></pre>";

echo "<pre>Под заказ:<br><b>";
print_r($ordered_car);
echo "</b></pre>";

echo "<pre>Сам сделал тюниг:<br><b>";
print_r($tuning_car_full);
echo "</b></pre>";

echo "<pre>Поменял цвет:<br><b>";
print_r($tuning_car_color);
echo "</b></pre>";

echo "<pre>Поставил новые диски (покруче?):<br><b>";
print_r($tuning_car_disks);
echo "</b></pre>";