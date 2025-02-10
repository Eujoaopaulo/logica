<?php
$produtor = "joão";

$peso_1 = 150;
$peso_2 = 180;
$arroba = 15;
$preco_arroba = 450;
$quantidade_arroba = ($peso_1 + $peso_2) / $arroba;
$preco_total = $quantidade_arroba * $preco_arroba;

echo "o $produtor ira receber R$ ". number_format($preco_total,2,',','.') . " pelo boi";
