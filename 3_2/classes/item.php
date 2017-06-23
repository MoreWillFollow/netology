<?php

interface thing {
    function breaking ();
}

class item
{
    function classDescription() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    protected $name=1;
    protected $article=3;
    protected $barcode=5;
    public function getDescription () {
        $description= "Товар "."$this->name"." с баркодом "."$this->barcode"." и артикулом "."$this->article";
        return $description;
    }

}
