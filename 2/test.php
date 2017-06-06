<meta charset="UTF-8">
<style>

    body {
        padding: 50px 100px;
        margin: 0 auto;
        font-family: Verdana, "PT Sans Caption", SansSerif;
        font-size:20px;
        text-align: center;
    }

</style>

<?php
error_reporting (E_ALL);
$x = $_GET['x'];
echo 'Исходное число ' . $x;
echo '<br/>';
$a1 = 1;
$a2 = 1;

do {
    if ( $a1 <> $x ){
        $a3 = $a1;
        $a1 = $a1 + $a2;
        $a2 = $a3;
    } else {
        echo 'ВХОДИТ';
    }

}
while ($x >= $a1);

    if ( $a1 < $x ) {
        echo 'НЕ входит';
    }
?>