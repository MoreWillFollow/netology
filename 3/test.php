<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.04.17
 * Time: 20:35
 */

$start_data = [
    "Africa" => [
        "Canis lupus",
        "Ovis orientalis",
        "Sus scrofa",
        "Capra aegagrus",
        "Bos primigenius",
        "Felis silvestris lybica"
    ],
    "Europa" => [
        "Gallus gallus",
        "Cavia tschudii",
        "Equus asinus",
        "Anas platyrhynchos"
    ],
    "Asia" => [
        "Bubalus arnee",
        "Equus ferus",
        "Camelus dromedarius",
        "Bombyx mandarina",
        "Columba livia",
        "Anser anser",
        "Bos grunniens"
    ]
];

shuffle($start_data);

echo "<pre>";
var_dump($start_data);
echo "</pre>";