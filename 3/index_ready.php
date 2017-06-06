
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

/*echo "<pre>";
print_r($data);
echo "</pre>";

$first_words = [];

$words_exmp = [
  "one_key" => "value _one",
  "two_key" => "value_t wo",
  "three_key" => "valu e_three",
  "four_key" => "v alue_four"
];

echo "<pre>";
print_r($words_exmp);
echo "</pre>";*/

echo "<hr>";

echo "<div functions=\"functions_inHTML\">";

//Находим и вырезаем ПЕРВОЕ слово + забиваем в массив $first_word
foreach ($data as $continent => $animals) {
    foreach ($animals as $key => $value) {
        $found = substr($value, 0,(strpos($value, " ")));
        $first_words[] = $found;
    };
};

$length = 0;
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
        $second_words[]=$found;
    }
}
$second_words[] = shuffle ($second_words);
$count_elements = count($first_words);

$i = 0;
while ( $i < $count_elements) {
    $new_animals[]= $first_words[$i].$second_words[$i];
    $i++;
}

foreach ($new_animals as $key => $value) {
    echo "<pre>";
    echo "Новое животное: ".$value;
    echo "</pre>";

}


/*echo "<pre>First words<br>";
var_dump($first_words);
echo "</pre><hr>";

echo "<pre>Second words<br>";
var_dump($second_words);
echo "</pre>";

echo "<pre> New Animals<br>";
var_dump($new_animals);
echo "</pre><hr>";*/



echo "</div>";




/*foreach ($words_exmp as $key => $value) {
    $found = substr($value, 0,(strpos($value, " ")));
        $found1 = strlen(strpos($value, " "));
        $found1 = strlen(strpos($value, " "));
        echo "value is: ".$value."<br>";
        echo "found this: ".$found."<br>";
        echo "found this 1: ".$found1."<br><hr>";
    $first_words[] = $found;
};*/



/*echo "<hr>";
echo "<pre>";
print_r($first_words);
echo "</pre>";*/


/*$new_data = [];

function mix_data($a) {
    foreach ($a as $key => $value ) {

    }
};


echo "<pre>";
print_r($data['Africa']);
echo "</pre>";


echo "<pre>";
print_r($data);
echo "</pre>";*/

?>
