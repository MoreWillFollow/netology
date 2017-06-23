<?php

interface display {
    public function turnOnTv($on_or_not);
}

class screens extends superclass
{
    protected $screen_size;
    protected $screen_type;
    protected $on_or_not;


    public function turnOnTv ($on_or_not) {
        if ($on_or_not == "On" or $on_or_not == "ON") {
            $this->on_or_not = $on_or_not;
        }
        elseif ($on_or_not == "OFF" or $on_or_not == "Off") {
            $this->on_or_not = $on_or_not;
        }
    }
}