<?php

$carro = [
    'Z3' => [
        'marca' => 'BMW',
        'modelo' => 'passeio'
    ],
    'Scannia' => [
        'marca' => 'Mercedez',
        'modelo' => 'modelend'
    ]
];

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

foreach($carro as $item => $veic){
    echo $item . " " . $veic['marca'] . PHP_EOL;
}

