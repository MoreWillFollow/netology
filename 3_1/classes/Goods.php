<?php

class Goods
{
    private $name;
    private $article;
    private $barcode;
    private $category;
    private $size;
    private $color;
    private $stock;
    private $usage;

    function addGoods ($name, $article,$barcode,$category,$size,$color,$stock, $usage) {
        $this->name = $name;
        $this->article = $article;
        $this->barcode = $barcode;
        $this->category = $category;
        $this->size = $size;
        $this->color = $color;
        $this->stock = $stock;
        $this->usage = $usage;
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