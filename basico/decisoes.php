<?php

$idade = 17;
$numPessoa = 1;

echo "Você só pode entrar se tiver mais de 18 anos\n";

//>< maior e menor == comparar valores,
//ou uma ou outra -> ||
//>= <= maior igual e menor igual
//and para comparar mais de 2 condições 
if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar";
    echo "Pode entrar!";
}else{
    echo "Você tem $idade anos e não pode entrar na festa!";
}
