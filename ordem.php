<?php

$numeros = array (15, 10, 35, 20, 18, 30, 5, 60, 45, 40);
echo "Ordem original: " . implode(", ", $numeros) . "<br>";

sort($numeros);
echo "Ordem crescente: " . implode(", ", $numeros) . "<br>";


rsort($numeros);
echo "Ordem decrescente: " . implode(", ", $numeros) . "<br>";
