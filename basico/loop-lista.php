<?php

$lista = [21, 23, 30, 35, 44, 46, 50, 60];

//lista subindo
for($i = 0; $i < count($lista); $i++){
    echo $lista[$i].PHP_EOL;
}
echo PHP_EOL;

//lista descendo
for($i = 7; $i >= 0; $i--){
    echo $lista[$i].PHP_EOL;
}

//função count retorna o tamanho da lista