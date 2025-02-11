<?php

// conversao de moedas
// crie um array associativo com as taxas de conversao de diferentes moedas para reais
// dolar (USD) = 5,10
// euro (EUR) = 5,50
// libra esterlina (GBP) = 6,30
// peso argentino (GBP) = 0,05

$taxas = array (
    ' dolar ' => 5.41,
    ' euro ' => 5.50,
    ' peso argentino ' => 0.05
);

$valor = 300;

//echo 'valor em dolar US$:' . number_format($valor_real / $taxas['dolar'], 2, ',', '.') . '<br>';
//echo 'valor em euro €:' . number_format($valor_real / $taxas['euro'], 2, ',', '.') . '<br>';
//echo 'valor em peso argentino $:' . number_format($valor_real / $taxas['peso argentino'], 2, ',', '.') . '<br>';


$taxas = array(
    'dolar' => 5.10,
    'euro' => 5.50,
    'libra esterlina' => 6.30,
    'peso argentino' => 0.05
);

// Exibe as taxas de conversão
foreach ($taxas as $moeda => $taxa) {
    echo "1 $moeda = R$ $taxa<br>";
}
?>