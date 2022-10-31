<?php

use SRC\Funcoes;

require('funcoes.php');

$functions = new Funcoes();

echo "O século do ano é: ".$functions->SeculoAno(1700);

echo "<br>";

echo "O número primo anterior é: ".$functions->PrimoAnterior(29);

echo "<br>";

echo "O segundo maior número do array é: ".$functions->SegundoMaior(
    array (
        array(25,22,18),
        array(10,15,13),
        array(24,5,2),
        array(80,17,15)
    )
);

echo "<br>";

$valor = $functions->SequenciaCrescente(array(3, 5, 67, 98, 3));

if($valor)
    echo "TRUE";
else
    echo "FALSE";