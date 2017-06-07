<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.05.17
 * Time: 17:18
 */

$text_name = "THIS IS TEST";

$im = imagecreatetruecolor(600, 600);
$backColor = imagecolorallocate($im, 181, 198, 137);
$textColor = imagecolorallocate($im, 255, 255, 255);

$fontFile ="verdana.ttf";
$imBox = imagecreatefrompng('serti.png');
imagefill($im, 0, 0, $backColor);
imagecopy($im, $imBox,10, 10, 0, 0, 600, 600);
imagettftext($im, 20, 0, 220, 130, $textColor, $fontFile, $text_name);
/*        imagettftext($im, 20, 0, 150, 300, $textColor, $fontFile, $text_greeting);
        imagettftext($im, 20, 0, 150, 180, $textColor, $fontFile, $text_result);*/
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);