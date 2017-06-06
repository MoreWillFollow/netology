<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.05.17
 * Time: 14:34
 */
/*
$w = "I AM W";
$r = "I AM R";
$m = "I AM M";
$name = "I AM NAME";

$text_name = $name; $text_greeting = $m; $text_result = $r ;*/

include ("functions/sertificat_generator.php");
header('Content-Type: image/png');
certificatGenerator ($text_name, $text_greeting, $text_result);