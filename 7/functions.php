<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.05.17
 * Time: 0:14
 */

/* Check results */

/*function sertificatGenerator ($text_name, $text_greeting, $text_result)
{
    $im = imagecreatetruecolor(600, 600);
    $backColor = imagecolorallocate($im, 181, 198, 137);
    $textColor = imagecolorallocate($im, 255, 255, 255);

    $fontFile ="/verdana.ttf";
    $imBox = imagecreatefrompng('serti.png');
    imagefill($im, 0, 0, $backColor);
    imagecopy($im, $imBox,10, 10, 0, 0, 600, 600);
    imagettftext($im, 30, 0, 220, 130, $textColor, $fontFile, $text_name);
    imagettftext($im, 30, 0, 150, 300, $textColor, $fontFile, $text_greeting);
    imagettftext($im, 30, 0, 150, 180, $textColor, $fontFile, $text_result);


    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);

}*/

/*include ("functions/sertificat_generator.php");*/

function CheckResults ($w, $r, $m, $name) {
/*    $totalq = ($w+$r+$m)*0.8;

    if ($totalq > $r) {
        $text_name = $name;
        $text_greeting = "сожалеем...";
        $text_result = "Тест завален...";
        $certificate = certificatGenerator($text_greeting, $text_greeting, $text_result);
    }
    elseif ($totalq == $r) {
        $text_name = $name;
        $text_greeting = "фух...";
        $text_result = "Вы прошлив тютелька в тютелтку.";
        $certificate = certificatGenerator($text_greeting, $text_greeting, $text_result);

    }
    elseif ($r === ($w+$r+$m)) {
        $text_name = $name;
        $text_greeting = "ВАУ!";
        $text_result = "Чистая, совершенная пятерочка!";
        $certificate = certificatGenerator($text_greeting, $text_greeting, $text_result);

    }
    elseif ($totalq < $r) {
        $text_name = $name;
        $text_greeting = "подздравляем!" ;
        $text_result = "Тест пройден!";
        $certificate = certificatGenerator($text_greeting, $text_greeting, $text_result);

    }
    return $certificate;*/


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


/*CheckResults ($w, $r, $m, $name);*/

/*CheckResults ($w, $r, $m, $name);*/