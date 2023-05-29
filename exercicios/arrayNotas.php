<?php

$aluno1 = [
    'nome' => 'vinicius',
    'nota' =>10
];
$aluno2 = [
    'nome' => 'alexandre',
    'nota' => 9
];
$aluno3 = [
    'nome' => 'Nara',
    'nota' => 8
];

$notas = [$aluno1,$aluno2,$aluno3];

for($i = 0; $i < count($notas); $i++){
    echo $notas[$i]['nome'] .PHP_EOL;
}

foreach($notas as $nota => $nome){
    echo $nota . " " . $nome['nome'] . PHP_EOL;
}