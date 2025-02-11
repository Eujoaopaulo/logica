<?php

$frutas =  ['Banana', 'Maçã', 'Morango', 'Uva', 'Pera'];

foreach ($frutas as $fruta) {
echo $fruta . '<br>';
}

echo '----------------------------------------------- <br>';

$frutas[] = 'abacaxi';

foreach ($frutas as $fruta){
echo $fruta . '<br>';
}


echo '----------------------------------------------- <br>';

array_shift($frutas,);

foreach ($frutas as $fruta) {
echo $fruta . '<br>';
}

