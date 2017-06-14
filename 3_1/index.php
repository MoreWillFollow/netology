<?php

include "classes/Car.php";
include "classes/Pen.php";
include "classes/Duck.php";
include "classes/Goods.php";
include "classes/Tv.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>Домашнее задание 3.1</title>
</head>
<body>


<section>
    <h2>1. Инкапсуляция - своими словами.</h2>
    <hr>
    <p>Мы изолируем некие данные и процессы в капсуле. В этой капсуле мы делаем окошко где сидит чудик и принимает определенные данные. И если чудик одобряет входящие данные, то капсула выполняет свою работу. Допустим, возводит числа в квадрат. А если нет, то чудик ругается :)

        Суть.
        Мы отделяем процессы и данные от общего кода, чтобы код вне капсулы не мог повредить данные внутри капсулы. И сами назначаем какие данные принимать из вне и какие данные отдавать. </p>
</section>

<section>
    <h2>2. Плюсы и минусы объектов</h2>
    <hr>
    <p><b>Плюсы:</b></p>
    <p>-Данные и методы надежно защищены и не могут быть случайно изменены из другого места кода вне объекта.</p>
    <p>-Можно обновлять код в капсуле, не рискую нарушить работу сервиса. Главное чтобы входящие и исходящие данные оставались неизменными.
    <p>-Экономия времени при изменениях в объекте за счет классов.</p>
    <p><b>Минусы:</b></p>
    <p>-Как-то не особо заметил :) Пока, просто непривычно структурировать код таким образом.
    </p>
</section>

<section>
    <h2>5 классов и по 2 объекта каждого класса</h2>
    <hr>
    <div class="one">
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