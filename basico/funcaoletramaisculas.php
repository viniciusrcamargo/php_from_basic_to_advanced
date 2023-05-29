<?php

function titularComLetrasMaiusculas(array $conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}