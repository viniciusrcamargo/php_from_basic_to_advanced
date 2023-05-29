<?php

function sacar(array $conta, float $valorSacar): array{
    if ($valorSacar > $conta['saldo']) {//conta passada por parâmetro, depois acessa o campo saldo do array
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta,float $valorDepositar): array{
    if($valorDepositar > 0){
        $conta['saldo'] += $valorDepositar;
    }else{
        exibeMensagem("Você precisa de algum valor para prosseguir");
    }
     return $conta;
}

Function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
}

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


$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], -1);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}