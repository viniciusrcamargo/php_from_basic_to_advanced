<?php

$aluno = 0;

for($i = 1; $i < 16; $i++){
    echo "Aluno - " . $i . PHP_EOL;
}

$contador = 1;

while ($contador <= 15){
    echo "#$contador" .PHP_EOL;
    $contador = $contador + 1;
}

$i = 0;
do {
    echo $i;
} while ($i > 0);