<?php


class Car extends automobile implements transport
{
    private $color = "Белая";
    private $motor = "0.6";
    private $roof = "Без люка";
    private $disks = "Стандартные диски";
    private $speed = 0;


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

    public function accelerate($speed) {
        $this->speed=$speed;
    }
}