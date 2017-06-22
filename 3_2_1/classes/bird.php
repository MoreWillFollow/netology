<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.06.17
 * Time: 0:45
 */
class bird
{
    private $wings = 2;
    private $hungry = "YES";
    function sethungry ($food) {
        if ($food = "millet") {
            $this->hungry ="NO";
        }

    }
}