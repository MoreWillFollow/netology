<?php

class Car
{
    private $color = "Белая";
    private $motor = "0.6";
    private $roof = "Без люка";
    private $disks = "Стандартные диски";

    function orderedCar ($color, $motor, $roof, $disks) {
        $this->motor = $motor;
        $this->roof = $roof;
        $this->tuningCarColor($color);
        $this->tuningCarDisks($disks);
    }

    function tuningCar ($color, $disks) {

        $this->tuningCarColor($color);

        $this->tuningCarDisks($disks);
    }

    function tuningCarColor ($color) {
        $this->color = $color;
    }

    function tuningCarDisks ($disks) {
        $this->disks = $disks;
    }
}