<?php

$n1 = 7;
$n2 = 8;
$n3 = 9;
$n4 = 10;
$aluno = 'joao';

$media = ($n1 + $n2 + $n3 + $n4 ) / 4;

    if ($media >= 7) { 
        echo $aluno . ', voce foi aprovado com media' . $media;
    } else if ($media < 7 && $media >= 5) {
        echo $aluno . ', voce esta em recuperação com media' . $media;
    } else {
         echo $aluno . ', voce foi reprovado com media' . $media;
    }
 