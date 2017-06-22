<?php

class Tv extends screens implements display
{
    private $remote_control;
    private $used;


    function __construct()
    {
        $this->screen_size = 21;
        $this->screen_type = "LCD";
        $this->remote_control = "YES";
        $this->used = "NO";
        $this->on_or_not = "OFF";
    }


    function chooseTV ($screen_size, $screen_type, $remote_control, $used, $on_or_not) {
        $this->screen_size = $screen_size;
        $this->screen_type = $screen_type;
        $this->remote_control = $remote_control;
        $this->used = $used;
        $this->on_or_not = $on_or_not;
    }

}