<?php

$pen_normal = new Pen();
$pen_red_color = new Pen();
$pen_customized = new Pen();
$pen_dead = new Pen();

$pen_red_color->redPen();
$pen_customized->customPen("Оранжевая","Новая","В космосе");

$pen_dead->resource = 0;


echo "<pre>Ручка кончилась: <br><b>";
print_r($pen_dead);
echo "</b></pre>";

echo "<pre>Стандартная ручка для школьников: <br><b>";
print_r($pen_normal);
echo "</b></pre>";

echo "<pre>Красная ручка:<br><b>";
echo"</b><b>";
print_r($pen_red_color);
echo "</b></pre>";

echo "<pre>Ручка для письма в космосе:<br><b>";
print_r($pen_customized);
echo "</b></pre>";
