<?php

$num = [12,13,14,15,16,17,19,24,25,36,78,99,100,132,240,750,890,990,1000];

for($i = 0; $i < count($num); $i++){
    echo "número = ". $num[$i] . PHP_EOL;
}

/*array de trás para frente
for($i = count($num); $i >= 0; $i--){
    echo "número = ".$num[$i].PHP_EOL;
}*/