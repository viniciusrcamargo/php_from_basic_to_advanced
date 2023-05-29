<?php

$notas = [
    ['nome' => 'vinicius',
    'nota' =>10],
    ['nome' => 'alexandre',
    'nota' => 9],
    ['nome' => 'Nara',
    'nota' => 8]
];


foreach($notas as $id => $nome){
    echo $id . " " . $nome['nome'].PHP_EOL;
}