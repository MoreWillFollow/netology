<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.05.17
 * Time: 16:26
 */
session_start();

$text_name = $_SESSION['text_name'];
$text_greeting = $_SESSION['text_greeting'];
$text_result = $_SESSION['text_result'];

include __DIR__ . '/src/CertificatGD.php';
$certificate = new CertificatGD();
$certificate->generate($text_name, $text_greeting, $text_result);

