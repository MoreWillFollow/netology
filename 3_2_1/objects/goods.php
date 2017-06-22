<?php


$new_goods = new Goods("Крутая штуковина","SKU117","9421564653","Gifts","1","Мультицветовая гамма","1456","");
$new_goods_color = new Goods("Крутая штуковина","SKU117","9421564653","Gifts","1","Мультицветовая гамма","1456","");
$out_of_stock = new Goods("Крутая штуковина","SKU117","9421564653","Gifts","1","Мультицветовая гамма","1456","");
$used_goods = new Goods("Крутая штуковина","SKU117","9421564653","Gifts","1","Мультицветовая гамма","1456","");

$new_goods_color->setGoodsColor("SKU117","Зеленая");
$out_of_stock->outOfStock("SKU117");
$used_goods->usedGoods("SKU117");



echo "<pre>Добавили новый товар: <br><b>";
print_r($new_goods);
echo "</b></pre>";

echo "<pre>Поменяли цвет товара:<br><b>";
echo"</b><b>";
print_r($new_goods_color);
echo "</b></pre>";

echo "<pre>Товар закончился на стоке - больше нет:<br><b>";
print_r($out_of_stock);
echo "</b></pre>";

echo "<pre>Этот товар Б/У:<br><b>";
print_r($used_goods);
echo "</b></pre>";