<?php

$peso = 62.5;
$altura = 1.68;

$resultado = $peso / ($altura * $altura);
//echo $resultado;

if ($resultado < 17){
    echo "Muito abaixo do peso";
}else if($resultado > 17 && $resultado < 18){
    echo "Abaixo do peso";
}else if($resultado > 18 && $resultado < 25){
    echo "Peso Normal";
}else{
    echo "Obesidade";
}