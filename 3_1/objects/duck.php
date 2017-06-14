<?php



$duck = new Duck();
$flying_duck = new Duck();
$hunted_duck = new Duck();
$cooked_duck = new Duck();

$flying_duck->flyingDuck();
$hunted_duck->huntedDuck();
$cooked_duck->cookedDuck();




echo "<pre>Обычная утка - живая: <br><b>";
print_r($duck);
echo "</b></pre>";

echo "<pre>Утка летит:<br><b>";
echo"</b><b>";
print_r($flying_duck);
echo "</b></pre>";

echo "<pre>Утка, которую пристрелили на охоте:<br><b>";
echo"</b><b>";
print_r($hunted_duck);
echo "</b></pre>";

echo "<pre>Утка, которую приготовили:<br><b>";
print_r($cooked_duck);
echo "</b></pre>";
