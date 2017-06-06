
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
/*
echo "<pre>First words<br>";
var_dump($first_words);
echo "</pre><hr>";*/


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
/*
echo "<pre>First words<br>";
var_dump($first_words);
echo "</pre><hr>";

echo "<pre>Second words<br>";
var_dump($second_words);
echo "</pre>";
*/


// ТУТ НУЖНО СКЛЕИТЬ СТРОКИ ТАК, ЧТОБЫ ОНИ БЫЛИ КАК НАДО :) 
$first_words_in = $first_words;

$i = 0;
$c = 0;
$j = 0;
$k = 0;
$s = 0;
while ( $c < $count_elements) {

    foreach ($first_words as $key => $value) {
        echo "<h1>Континент: ".$key."</h1><hr>";
        foreach ($value as $continent => $animal_name) {
            $counter = count($first_words[$key]);
            $new_animal = $first_words[$key][$i].$second_words[$i];
            $new_animals[] = [
                "$key" => "$new_animal"
            ];
            $i++;
            echo $i.") ".$new_animals[$j]."<br>";
            if ($i == $counter) {$i=0;}
            $j++;
        }

        $c++;
    }
}

echo "<hr>";
echo "<pre>";
print_r($new_animals);
echo "</pre>";

?>
