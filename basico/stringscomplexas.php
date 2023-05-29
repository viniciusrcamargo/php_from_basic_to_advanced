<?php

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
/*forma que funciona mas não é uma boa prática
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}*/

//forma correta com boas práticas
foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf {$conta['titular']} {$conta['saldo']}". PHP_EOL;
}

//link para a documentação de strings -> https://www.php.net/manual/en/language.types.string.php