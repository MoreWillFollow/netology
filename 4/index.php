<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="main.css">


<body>

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.04.17
 * Time: 18:32
 */



$city = "Moscow";
$country = "RU";
$key = "&appid=22eed902f65c43017cca7584aa8e5096";


$connect_weather = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=.$city$key&units=metric");

$weather_data = json_decode($connect_weather, true);

$general = $weather_data["weather"]["0"]["main"];
$condition_img = $weather_data["weather"]["0"]["icon"];
$temp = $weather_data["main"]["temp"];
$wind_speed = $weather_data["wind"]["speed"];
$wind_degree = $weather_data["wind"]["deg"];
$clouds = $weather_data["clouds"]["all"];



/*echo "General: ".$general."<br>";
echo "Temperature: ".$temp."<br>";
echo "Wind speed: ".$wind_speed."<br>";
echo "Wind degree: ".$wind_degree."<br>";
echo "Clouds: ".$clouds."<br>";*/


/*

echo "<hr>var_dump: <pre>";
var_dump($weather_data);
echo "</pre>";*/




/*function json_to_array ($json_data)
{
    foreach ($json_data as $key => $value) {
        $array[] = $key . " | " . $value;
    }
    return $array;
}



$json_array = json_to_array($weather_data);

echo "<hr>var_dump: <pre>";
var_dump($json_array);
echo "</pre>";

echo "<hr>";

*/

?>
</body>

<div class="widget">
    <p>Weather condition in <?=$city?> is <?=$general?><img src="http://openweathermap.org/img/w/<?=$condition_img?>.png"></p>
    <p>Temperature: <?=$temp?></p>
    <p>Wind speed: <?=$wind_speed?></p>
    <p>Wind direction (in degree): <?=$wind_degree?></p>
    <p>Clouds: <?=$clouds?></p>

</div>
</html>
