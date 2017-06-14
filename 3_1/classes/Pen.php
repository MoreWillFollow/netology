<?php

class Pen
{
    private $color = "Синяя";
    private $new_or_not = "Новая";
    private $used_in = "Школе";

    function redPen () {
        $this->color = "Красная";
    }

    function customePen ($color, $new, $used_in) {
        $this->color = $color;
        $this->new = $new;
        $this->used_in = $used_in;
    }
}