<?php
error_reporting(E_ALL);
include "classes/automobile.php";
include "classes/item.php";
include "classes/bird.php";
include "classes/writingTool.php";
include "classes/screens.php";
include "classes/item.php";
include "classes/Car.php";
include "classes/Pen.php";
include "classes/Duck.php";
include "classes/Goods.php";
include "classes/Tv.php";
include "interface/animal.php";
include "interface/transport.php";



$code1 = "<?php getMoney(), 
{ //разбить копилку и вернуть сумму денег}";
$code2 = "<?php getMoney()
{ parent::getMoney() //открыть копилку и вернуть сумму денег}";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>Домашнее задание 3.2</title>
</head>
<body>


<section>
    <h2>1. Полиморфизм и наследования своими словами.</h2>
    <hr>
    <p><b>Наследование:</b></p>
    <p>Это когда новый класс перенимает все свойства и методы уже объявленного класса. Грубо говоря, это «Скопируй все что внутри такого-то класса и вставь в этот класс». При этом мы имеем возможность переопределять свойства и методы объявив их в новом классе.</p>
    <p><b>Полиморфизм:</b></p>
    <p>Это переопределение методов, полученных от родительского класса. То есть, мы заставляем объект экземпляра вести себя немного иначе. К примеру, если наш супер-класс это копилка, то у нее будет метод</p>
    <p><?highlight_string($code1)?>,</p>
    <p>то для новых моделей копилок с возможностью достать накопления не разбив свинюшку, этот метод будет переопределен на</p>
    <p><?highlight_string($code2)?></p>
</section>

<section>
    <h2>2. Отличие интерфейсов и абстрактных классов. В чем отличие? Когда лучше использовать одно, когда другое;</h2>
    <hr>
    <p><b>Разница:</b></p>
    <p>-В интерфейсах только методы и константы, без реализации и свойств. В абстрактных классах могут быть реализации, но класс все равно будет абстрактным, если там будет хотя бы одна абстракция.</p>
    <p>-Множественное наследование в PHP не поддерживается. То есть, родитель может быть только один. А интерфейсов у одного класса может быть много.</p>
    <p><b>Что когда лучше использовать:</b></p>
    <p>Интерфейс, лучше использовать для структурирования кода и приведения его к общим связям. Он помогает устанавливать связь между классами, объектами кода.</p>
    <p>Абстрактный класс это тот же интерфейс, только с реализацией и свойствами.</p>
</section>

<section>
    <h2>3. Суперклассы для классов с <a href="http://clvrdgtl.com/l/PHP/3_1/index.php" target="_blank">Домашнее задание 3.1</a></h2>

    <hr>
    <div class="one">
        <p><b>СУПЕРКЛАСС</b></p>
        <?php
        show_source("classes/automobile.php");

        ?>
        <p><b>Класс Машина</b></p>

        <?php
        show_source("classes/Car.php");
        ?>
        <p><b>Несколько объектов</b></p>
        <?
        include "objects/car.php";
        ?>
        <hr>
    </div>
    <div class="two">
        <p><b>Класс Телевизор</b></p>
        <?php
        show_source("classes/Tv.php");
        ?>
        <p><b>Несколько объектов</b></p>
        <?
        include "objects/tv.php";
        ?>
        <hr>
    </div>

    <div class="one">
        <p><b>Класс Шариковая ручка</b></p>
        <?php
        show_source("classes/Pen.php");
        ?>
        <p><b>Несколько объектов</b></p>
        <?
        include "objects/pen.php";
        ?>
        <hr>
    </div>

    <div class="two">
        <p><b>СУПЕРКЛАСС Утка</b></p>

        <?php
        show_source("classes/bird.php")
        ?>

        <p><b>Класс Утка</b></p>
        <?php
        show_source("classes/Duck.php");
        ?>
        <p><b>Несколько объектов</b></p>
        <?
        include "objects/duck.php";
        ?>
        <hr>
    </div>

    <div class="one">
        <p><b>СУПЕРКЛАСС Товар</b></p>
        <?php
        show_source("classes/item.php");
        ?>

        <p><b>Класс Товар</b></p>
        <?php
        show_source("classes/Goods.php");
        ?>
        <p><b>Несколько объектов</b></p>
        <?
        include "objects/goods.php";
        ?>
    </div>


</section>
</body>
</html>