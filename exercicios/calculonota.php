<?php

$numeros = [];

for($i = 0; $i < 10; $i++){
    $line = readline("Insira um número: "). PHP_EOL;
    $numeros[$i] = $line;
    //echo "número = " . $numeros[$i];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Números</h1>
    <td>
        <dl>
            <?php foreach($numeros as $num => $n) { ?>
            <dt style="border: 5px solid black"><?php echo "número = " . $n . PHP_EOL; ?></dt>
            <?php } ?>
        </dl>
    </td>
</body>
</html>
