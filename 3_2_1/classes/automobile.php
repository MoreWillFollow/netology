<?php


class automobile
{
    public $wheels = "4";
    private $speed = 0;
    public function accelerate($speed) {
        $this->speed=$speed;
    }
}