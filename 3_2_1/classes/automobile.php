<?php

interface transport  {
    public function accelerate($speed);
}

class automobile
{
    public $wheels = "4";
    private $speed = 0;

}