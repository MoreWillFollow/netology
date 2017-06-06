<html>
<meta charset="UTF-8">
<style>
    body {
        width: 500px;
        margin: 0 auto;
        padding-top: 200px;
        font-family: Verdana, "PT Sans Caption", SansSerif;
        font-size: 20px;
    }
</style>
</html>
<?php
/* Задача:
Цыпленок стоит 0.5 долларов.
Курица стоит 10 долларов.
Кролик стоит 3 доллара.

Сколько нужно купить животных, чтобы и количество и сумму животных были равны 100.
 */



$x = 0;
$y = 0;
$z = 0;


$i=1;
while ($i>0) {
    $x = rand(1,100);
    $y = rand(1,100);
    $z = rand(1,100);

    $money=$x*0.5+$y*10+$z*3;
    $count=$x+$y+$z;

    if ($money==100 and $count==100) {
        echo "Цыплят: ".$x.". На сумму: ".$x*0.5."<br>";
        echo "Курицы: ".$y.". На сумму: ".$y*10 ."<br>";
        echo "Кроликов: ".$z.". На сумму: ".$z*3 ."<br>";
        echo "Всего оплачено: ".$money."<br>";
        echo "Общее количество животных: ".$count."<br>";
        break;
    }
}


?>