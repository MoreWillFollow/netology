<?php

class Duck
{
    private $sound = "Кря";
    private $fly = "Нет";
    private $color = "Коричневая";
    private $dive = "Да";
    private $size = "Средняя";
    private $walking = "Да";
    private $hundet = "Нет";
    private $cooked = "Нет";

    function flyingDuck () {
        $this->walking = "Нет";
        $this->fly = "Да";
    }

    function huntedDuck () {
        $this->fly = "Нет";
        $this->walking = "Нет";
        $this->hundet = "Да";
    }

    function cookedDuck () {
        $this->fly = "Нет";
        $this->walking = "Нет";
        $this->hundet = "Да";
        $this->cooked = "Да";
    }

}