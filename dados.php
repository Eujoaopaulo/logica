<?php

$dados = array(
    'nome' => 'zezinho',
    'dt_nasc' => '14/08/2002',


        'documentos' => array(
        'id' => '157987',
        'rg' => '12.345.678-9',
     'cpf' => '987.654.321-00',
        ),

    'endereço' => array(
        'tipo' => 'rua',
        'logradouto' => 'rua dos bobos',
        'numero' => '0',
        'complemento' => 'casa verde',
        'bairro' => 'jardim das flores',
        'cidade' => 'sao paulo',
        'cep' => '27600-000',

    ),
        'filiação' => array(
            'nome do pai' => 'joaozinho',
            'nome da mae' => 'mariazinha',

        ),
        'contato' => array(
            'email' => 'joaonumero0@gmail.com',
            'telefone' => '24 1578-9875',
            'celular' => '11 98765-4321',
            'telefone fixo' => '24 1578-9875',
        )
        );

        

    echo '<strong> documentos </strong> <br>';
        foreach ($dados ['documentos'] as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }
echo '<h2> endereço </h2>';
        foreach ($dados ['endereço'] as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }
        echo '<h2> filiação </h2>';
        foreach ($dados ['filiação'] as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }
        echo '<h2> contato </h2>';
        foreach ($dados ['contato'] as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }

    