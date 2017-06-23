<?php


interface animal {
    function sleeping();
}

class bird extends superclass
{
    private $wings = 2;
    private $hungry = "YES";
    function sethungry ($food) {
        if ($food = "millet") {
            $this->hungry ="NO";
        }

    }
}