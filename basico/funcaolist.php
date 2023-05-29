<?php

$info = array('Café', 'marrom', 'cafeína');
[$bebida, $cor, $substancia] = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";


$info = array('Café', 'marrom', 'cafeína');
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";