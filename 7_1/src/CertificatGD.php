<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.05.17
 * Time: 16:21
 */
class CertificatGD
{
    public function generate ($text_name, $text_greeting, $text_result) {
        $im = imagecreatetruecolor(600, 600);
        $backColor = imagecolorallocate($im, 181, 198, 137);
        $textColor = imagecolorallocate($im, 255, 255, 255);

        $fontFile ="src/assets/verdana.ttf";

        $imBox = imagecreatefrompng("serti.png");
        imagefill($im, 0, 0, $backColor);
        imagecopy($im, $imBox,10, 10, 0, 0, 600, 600);
        imagettftext($im, 15, 0, 220, 130, $textColor, $fontFile, $text_name);
        imagettftext($im, 15, 0, 150, 220, $textColor, $fontFile, $text_greeting);
        imagettftext($im, 15, 0, 150, 280, $textColor, $fontFile, $text_result);
        header('Content-Type: image/png');
        imagepng($im);
        imagedestroy($im);
    }
}