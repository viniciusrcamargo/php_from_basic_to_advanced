<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];
//adicionando dados no array, tem que ser de mesmo indice
$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes['123.258.859-72'] = [
    'titular' => 'Claudia 2',
    'saldo' => 2002
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}