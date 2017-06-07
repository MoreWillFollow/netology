<?php


session_start();


include ("functions/sertificat_generator.php");
header('Content-Type: image/png');
certificatGenerator ($_POST["name"], $text_greeting, $text_result);