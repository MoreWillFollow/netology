<?php

class Goods extends item
{
    private $category;
    private $size;
    private $color;
    private $stock;
    private $usage;
    private $description;

    function __construct ($name,$article,$barcode,$category,$size,$color,$stock, $usage) {
        $this->name = $name;
        $this->article = $article;
        $this->barcode = $barcode;
        $this->category = $category;
        $this->size = $size;
        $this->color = $color;
        $this->stock = $stock;
        $this->usage = $usage;
        $this->description = parent::getDescription();
    }

    function setGoodsColor ($article, $color) {
        $this->article = $article;
        $this->color = $color;
    }

    function outOfStock ($article) {
        $this->article = $article;
        $this->stock = 0;
    }

    function usedGoods ($article) {
        $this->article = $article;
        $this->usage = "Б/У";
    }

}