<?php


class writingTool extends superclass
{
    public $resource = 1000;
    protected $usable_or_not = 1; //Usable if 1, not Usable if 0
    protected function writeOnPaper () {
        $this->resource = $this->resource - 73;
    }

}