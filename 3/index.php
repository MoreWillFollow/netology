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
error_reporting(E_ALL);

$data = [
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

//Находим и вырезаем ПЕРВОЕ слово + забиваем в массив $first_word
foreach ($data as $continent => $animals) {
    foreach ($animals as $key => $value) {
        $found = substr($value, 0,(strpos($value, " ")));
        $first_words[$continent][] = $found
        ;
    };
};

//Находим и вырезаем ВТОРОЕ слово + забиваем в массив $second_word

foreach ($data as $continent => $animal) {
    foreach ($animal as $key => $value) {
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
}
shuffle ($second_words);
$count_elements = count($first_words);


// СКЛЕИВАЮ ФРАГМЕНТЫ В ОДИН МАССИВ И ВЫВОЖУ НОВЫЕ НАЗВАНИЯ

$i = 0;
$c = 0;
$j = 0;
while ( $c < $count_elements) {
    foreach ($first_words as $key => $value) {
        echo "<h2>Континент: ".$key."</h2>";

        echo "<br><pre>";
        var_dump($value);
        echo "</pre><hr>";

        foreach ($value as $continent => $animal_name) {
            $counter = count($first_words[$key]);
            $new_animals[] = $first_words[$key][$i].$second_words[$i];
            $i++;
            echo $new_animals[$j];
            if ($i == $counter) {$i=0; echo ".";}
            else {
                echo ", ";
            }
            $j++;
        }

        $c++;
    }
}
?>
