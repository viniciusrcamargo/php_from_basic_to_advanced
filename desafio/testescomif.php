<?php

echo '***Banco Digital VIBANK***'.PHP_EOL;
echo PHP.EOL;
echo '***Escolha uma das opções abaixo***'.PHP_EOL;
echo '***1 - Conta poupança***'.PHP_EOL;
echo '***2 - Conta Corrente***'.PHP_EOL;
echo '***3 - Investimentos***'.PHP_EOL;
echo "Digite aqui: "; 
$line = readline().PHP_EOL;

if($line == 1){
    echo 'Acesso a sua conta poupança';
}else if($line == 2){
    echo 'Acesso a sua conta corrente';
}else if($line == 3){
    echo 'Acesso a sua conta de Investimentos';
}else{
    echo 'Opção indisponível';
}


