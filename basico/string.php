<?php

$idade = 35;

//concatenação é com . ponto
//aspas duplas php entende que precisa interpretar variaveis dentro da string
//aspas simples php não interpreta nada diferente de texto dentro da string
echo 'Ola eu sou o ' . $idade . "\n";
//PHP_EOL é um recurso php para indicar que o php precisa pular linha depois
echo "Ola eu sou o \n $idade" . PHP_EOL;
echo "\t Eu mostro umm texto com tab no início" . PHP_EOL;

echo "Mostrando \"aspas\" dentro de uma string";
