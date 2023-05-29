<?php

require_once 'Pessoa.php';
require_once 'Cpf.php';

$vinicius = new Pessoa('Vinicius Rodrigues', new Cpf('123.456.789-88'), 'Antino Arantes');
$romeu = new Pessoa('Sandoval Fernando', new Cpf('123.788.981-12'), 'Regente Feijó');
//var_dump($vinicius);

echo $vinicius->recuperaNome() . PHP_EOL;
echo $vinicius->recuperaRua() . PHP_EOL;
echo $vinicius->recuperaCpfPessoa() . PHP_EOL;
echo PHP_EOL;
echo $romeu->recuperaNome() . PHP_EOL;
echo $romeu->recuperaRua() . PHP_EOL;
echo $romeu->recuperaCpfPessoa() . PHP_EOL;