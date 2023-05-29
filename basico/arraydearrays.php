<?php
//array definindo o indice
$conta1 = ['titular' => 'Vinicius', 'saldo' => 1000000000];
$conta2 = ['titular' => 'Lais', 'saldo' => 1000];
$conta3 = ['titular' => 'Alfredo', 'saldo' => 300];

//Array de arrays
$contasCorrentes = [$conta1, $conta2, $conta3];
//iterando o array e mostrando os titulares das contas
for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] .PHP_EOL;
}