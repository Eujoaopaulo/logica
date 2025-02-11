<?php

//crie um array associativo com as seguintes informacoes:
//nome
//materia
//nota
//utilize um loop foreach para exibir todas as informacoes de cada aluno
//
//baseado na nota, exiba uma mensagem de aprovacao ou reprovacao
// se a nota for maior ou igual a 7, exiba aprovado,
// se a nota for menor que 7, e maior ou igual a 5 exiba 'recuperacao'
//se a nota for menor que 5, exiba reprovado

$alunos = array(
    array(
        'nome' => 'joãozinho',
        'materia' => 'QUIMICA NUCLEAR',
        'nota' => 3
    ),
    array(
        'nome' => 'juninho',
        'materia' => 'FISICA QUANTICA',
        'nota' => 9
    ),
    array(
        'nome' => 'carlinhos',
        'materia' => 'CALCULO DIFERENCIAL',
        'nota' => 6
    )
);

//exibir as informações de cada aluno(foreach)
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . "<br>";
    echo "Matéria: " . $aluno['materia'] . "<br>";
    echo "Nota: " . $aluno['nota'] . "<br>";

    //aprovação ou reprovação
    if ($aluno['nota'] >= 7) {
        echo "Situação: Aprovado<BR><BR>";
    } else if ($aluno ['nota'] >= 5) {
        echo "Situação: Recuperação<br><br>";
    } else {
        echo "Situação: Reprovado<br><br>";
    }
} 