<?php
class Duck extends bird implements animal
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

    function hunted () {
        $this->fly = "Нет";
        $this->walking = "Нет";
        $this->hundet = "Да";
        $this->sethungry("NO");
    }

    function cookedDuck () {
        $this->fly = "Нет";
        $this->walking = "Нет";
        $this->hundet = "Да";
        $this->cooked = "Да";
    }
    function sleeping()
    {
        echo "Duck can sleep";// TODO: Implement sleeping() method.
    }

}