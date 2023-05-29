<?php

$string = "testes de integração com PHP";

echo mb_strlen($string). PHP_EOL;
echo strtoupper($string);

//precisa descomentar no PHP.ini a linha extensio mbstring e a linha extension_dir = "ext"