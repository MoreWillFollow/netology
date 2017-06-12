

<?php
error_reporting(E_ALL);

$data = [
    "Africa" => [
        "Canis lupus",
        "Ovis orientalis",
        "Sus scrofa ololoshka",
        "Capra aegagrus",
        "Bos primigenius",
        "Felis silvestris lybica"
    ],
    "Europa" => [
        "Gallus gallus",
        "Bond Cavia tschudii",
        "Equus asinus",
        "Anas platyrhynchos"
    ],
    "Asia" => [
        "Obi-Wan Bubalus arnee",
        "Equus ferus",
        "777777777777777 Camelus dromedarius",
        "Bombyx mandarina",
        "Columba livia",
        "Anser anser",
        "Bos grunniens"
    ]
];

//Находим и вырезаем ПЕРВОЕ слово + забиваем в массив $first_word
//Находим и вырезаем ВТОРОЕ слово + забиваем в массив $second_word

foreach ($data as $continent => $animals) {
    foreach ($animals as $key => $value) {

        if (substr_count($value,  " ") === 1) {

            $found = substr($value, 0,(strpos($value, " ")));
            $first_words["$continent"][] = $found;

            $start = strpos($value, " ");
            $start1 = $start + 1;
            $end_s = strpos($value, " ", $start1);
            if (!$end_s > 0) {
                $found = substr($value, $start);

            }
            else {
                $length = $end_s-$start;
                $found = substr($value, $start, $length);
            }
            $second_words[] = $found;


        }

    };
};

// ПЕРЕМЕШИВАЕМ ОБА МАССИВА
foreach ($first_words as $key => $value) {
    shuffle($first_words[$key]);

}
shuffle ($second_words);

// СКЛЕИВАЮ ФРАГМЕНТЫ В ОДИН МАССИВ И ВЫВОЖУ НОВЫЕ НАЗВАНИЯ
$j = 0;
$new_array = [];

foreach ($first_words as $continent => $first_animals) {
    echo "<h2>".$continent."</h2>";

    foreach ($first_animals as $key => $animal) {
        echo $animal." ".$second_words[$j]."<br>";
        $j++;
    }
}

?>



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