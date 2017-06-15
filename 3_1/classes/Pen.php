<?php

class Pen
{
    private $color;
    private $new_or_not;
    private $used_in;

    function redPen () {
        $this->color = "Красная";
    }

    function __construct()
    {
        $this->color = "Синяя";
        $this->new_or_not = "Новая";
        $this->used_in = "Школе";
    }

    function customPen ($color, $new, $used_in) {
        $this->color = $color;
        $this->new_or_not = $new;
        $this->used_in = $used_in;
    }
}