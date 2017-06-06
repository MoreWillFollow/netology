<html>
<meta charset="UTF-8">
<style>

    body {
        padding: 50px;
        margin: 0 auto;
        font-family: Verdana, "PT Sans Caption", SansSerif;
        font-size:20px;
        text-align: center;
    }

    .x {
        width: 50%;
        margin: 30px auto;
        font-weight: bolder;
        background: lightgoldenrodyellow;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        padding: 10px;
    }

    p {
        width: 50%;
        margin: 30px auto;
        font-weight: bolder;
        background: lightblue;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        padding: 10px;
    }


</style>
</html>


<?php
error_reporting(E_ALL);
/*$x=rand(0,100);*/
$x=(int)$_GET['x'];
echo "<p functions='x'>Число на выбор: ".$x."</p>";

$a1 = 1;
$a2 = 1;
$c = 0;

do {
    if ($a1===$x) {
        echo "<p>Задуманное число входит в числовой ряд</p>";
        break;
    }
    else {
        $c = $a1;
        $a1 = $a1+$a2;
        $a2 = $c;

        if ($a1===$x) {
            echo "<p>Задуманное число входит в числовой ряд</p>";
            break;
        }
    }

    if ($a1>$x) {
        echo "<p>Задуманное число НЕ входит в числовой ряд</p>";
        break;
    }
}
while ($a1<$x);
?>





