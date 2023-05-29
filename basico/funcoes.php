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
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta) {
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    echo "<li>Titular: {$conta['titular']} . Saldo: {$conta['saldo']}</li>";
}