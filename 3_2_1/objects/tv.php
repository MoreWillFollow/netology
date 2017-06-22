<?php


$TV = new Tv();
$TV_buy = new Tv();
$TV_OFF = new Tv();
$TV_ONN = new Tv();

$TV_buy->chooseTV("56", "LCD", "YES", "NO", "NO");
$TV_OFF->turnOnTv("Off");
$TV_ONN->turnOnTv("ON");


echo "<pre>Обычный телевизор из магазина: <br><b>";
print_r($TV);
echo "</b></pre>";

echo "<pre>Купить телек под свои потребности<br><b>";
echo"</b><b>";
print_r($TV_buy);
echo "</b></pre>";

echo "<pre>Выключить телек:<br><b>";
print_r($TV_OFF);
echo "</b></pre>";

echo "<pre>Включить телек:<br><b>";
print_r($TV_ONN);
echo "</b></pre>";
