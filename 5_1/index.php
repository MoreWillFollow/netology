<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.06.17
 * Time: 17:58
 */
header('Content-Type: text/html; charset=UTF-8');

include ('yandex/geo/autoload.php');

if ($_GET["address"]===NULL) {
echo <<<HTML
<form action="" method="get">
    <label>
        <input type="text" name="address" placeholder="Адрес">
        <input type="submit" value="Найти">
    </label>
</form>
HTML;
}
else {
$api = new \Yandex\Geo\Api();
// Или можно икать по адресу
$api->setQuery($_GET["address"]);

// Настройка фильтров
$api
    ->setLimit(10) // кол-во результатов
    ->setLang(\Yandex\Geo\Api::LANG_US) // локаль ответа
    ->load();

$response = $api->getResponse();
$response->getFoundCount(); // кол-во найденных адресов
$response->getQuery(); // исходный запрос
$response->getLatitude(); // широта для исходного запроса
$response->getLongitude(); // долгота для исходного запроса

// Список найденных точек
$collection = $response->getList();

$i=0;

echo "Всего найдено адресов: ".$response->getFoundCount();

foreach ($collection as $item) {
    $item->getAddress(); // вернет адрес
    $item->getLatitude(); // широта
    $item->getLongitude(); // долгота
    $item->getData(); // необработанные данные

    $shir = $item->getLatitude();
    $dolg = $item->getLongitude();
    $i++;
    echo "<hr>".$i."<br>";
    echo "Широта: ".$shir."<br>";
    echo "Долгота: ".$dolg."<br>";

}
}
?>
