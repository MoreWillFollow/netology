<?php

class Car
{
    private $color = "Белая";
    private $motor = "0.6";
    private $roof = "Без люка";
    private $disks = "Стандартные диски";

    function orderedCar ($color, $motor, $roof, $disks) {
        $this->color = $color;
        $this->motor = $motor;
        $this->roof = $roof;
        $this->disks = $disks;
    }

    function tuningCar ($color, $disks) {
        $this->color = $color;
        $this->disks = $disks;
    }

    function tuningCarColor ($color) {
        $this->color = $color;
    }

    function tuningCarDisks ($disks) {
        $this->disks = $disks;
    }
}