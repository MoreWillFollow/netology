
<html>
<head>
    <title>Домашнее задание #3</title>
    <meta charset="UTF-8">
</head>
<style>
    body {

        width: 600px;
        text-align: left;
        margin: 0 auto;
        padding-top:30px;
    }
    body *{
        font-family: Verdana, "PT Sans Caption", SansSerif;
        font-size: 20px;
    }

    .functions_inHTML {
        color: blue;
    }
</style>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.04.17
 * Time: 12:41
 */

error_reporting(E_ALL);

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

foreach ($start_data as $continent => $animal) {
    echo "<h1>".$continent."</h1>";
    $i = 0;
    foreach ($animal as $key => $value) {
        $i++;
        echo "<pre>";
        echo $i.". ".$value;
        echo "</pre>";
    }
}


foreach ($start_data as $continent => $animal) {
    foreach ($animal as $key => $value) {
        if (substr_count($value, " ")>1)
        {
            $keys_to_unset[] = [
                    $continent => $key
            ];

            unset($start_data[$continent][$key]);
        }
    }
}

$data = $start_data;
echo "<div functions=\"functions_inHTML\">";

//Находим и вырезаем ПЕРВОЕ слово + забиваем в массив $first_word
foreach ($data as $continent => $animals) {
    foreach ($animals as $key => $value) {
        $found = substr($value, 0,(strpos($value, " ")));
        $first_words[] = $found;
    };
};

//Находим и вырезаем ВТОРОЕ слово + забиваем в массив $second_word

foreach ($data as $continent => $animal) {
    foreach ($animal as $key => $value) {
        $start = strpos($value, " ");
        $start1 = $start + 1;
        $end_s = strpos($value, " ", $start1);
        $found = substr($value, $start);
        $second_words[]= $found;
    }
}
shuffle($first_words);
shuffle ($second_words);
$count_elements = count($first_words);

$i = 0;

while ( $i < $count_elements) {
    $new_animals[]= $first_words[$i].$second_words[$i];
    $i++;
}

$i = 0;


foreach ($new_animals as $key => $value) {
    $i++;
    echo "<pre>";
    echo $i.") Новое животное: ".$value;
    echo "</pre>";


}

echo "</div>";

?>
