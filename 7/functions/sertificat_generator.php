<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.05.17
 * Time: 23:52
 */

function CheckResults ($w, $r, $m, $name) {
/*    $totalq = ($w+$r+$m)*0.8;

    if ($totalq > $r) {
        $text_name = $name;
        $text_greeting = "сожалеем...";
        $text_result = "Тест завален...";
    }
    elseif ($totalq == $r) {
        $text_name = $name;
        $text_greeting = "фух...";
        $text_result = "Вы прошлив тютелька в тютелтку.";

    }
    elseif ($r === ($w+$r+$m)) {
        $text_name = $name;
        $text_greeting = "ВАУ!";
        $text_result = "Чистая, совершенная пятерочка!";

    }
    elseif ($totalq < $r) {
        $text_name = $name;
        $text_greeting = "подздравляем!" ;
        $text_result = "Тест пройден!";

    }


    $certificate = certificatGenerator($text_name, $text_greeting, $text_result);

    return $text_name;*/
    $array = [];
    $text_name = $name;
    $text_greeting = "подздравляем!" ;
    $text_result = "Тест пройден!";

    $array['W'] = $w;
    $array['R'] = $r;
    $array['M'] = $m;
    $array['Name'] = $text_name;
    $array['Greeting'] = $text_greeting;
    $array['Result'] = $text_result;
    return $array;
}

function certificatGenerator ($text_name, $text_greeting, $text_result)
{
    $im = imagecreatetruecolor(600, 600);
    $backColor = imagecolorallocate($im, 181, 198, 137);
    $textColor = imagecolorallocate($im, 255, 255, 255);

    $fontFile ="verdana.ttf";
    $imBox = imagecreatefrompng('serti.png');
    imagefill($im, 0, 0, $backColor);
    imagecopy($im, $imBox,10, 10, 0, 0, 600, 600);
    imagettftext($im, 20, 0, 220, 130, $textColor, $fontFile, $text_name);
    imagettftext($im, 20, 0, 150, 300, $textColor, $fontFile, $text_greeting);
    imagettftext($im, 20, 0, 150, 180, $textColor, $fontFile, $text_result);

    header('Content-Type: image/png');
    return imagepng($im);
}

/*sertificatGenerator($text_name, $text_greeting, $text_result);*/


?>