<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Petrópolis', 'São João', 'Minha rua', '200');
$outroEndereco = new Endereco('Sudão ', 'Brotinho', 'Sua rua', '300');



//$umEndereco->cidade = 'Joazeiro';
var_dump($umEndereco);
echo $umEndereco . PHP_EOL;
echo $outroEndereco;