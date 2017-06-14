<?php

class Tv
{
    private $screen_size = 21;
    private $screen_type = "LCD";
    private $remote_control = "YES";
    private $used = "NO";
    private $on_or_not = "OFF";


    function turnOnTv ($on_or_not) {
        if ($on_or_not == "On" or $on_or_not = "ON") {
            $this->on_or_not = $on_or_not;
        }
        elseif ($on_or_not == "OFF" or $on_or_not = "Off") {
            $this->on_or_not = $on_or_not;
        }
    }

    function chooseTV ($screen_size, $screen_type, $remote_control, $used, $on_or_not) {
        $this->screen_size = $screen_size;
        $this->screen_type = $screen_type;
        $this->remote_control = $remote_control;
        $this->used = $used;
        $this->on_or_not = $on_or_not;
    }

}