<?php

//Passagem parametros por Valor
function incrementaValor($variavel, $valor)
{
    $variavel += $valor;
}

$a = 10;

incrementaValor($a, 20);

echo $a . PHP_EOL;

//Passagem parametros por referência
function incrementaRererancia(&$variavel, $valor)
{
    $variavel += $valor;
}

$a = 10;

incrementaRererancia($a, 20);

echo $a . PHP_EOL;

// Função com parametros de valor padrão

function incrementaValorPadrao(&$variavel, $valor = 50)
{
    $variavel += $valor;
}

$a = 10;

incrementaValorPadrao($a);

echo $a . PHP_EOL;


// Função com parametros dinâmicos

function ola()
{

    $quantidade_argumentos = func_num_args();

    for ($a = 0; $a < $quantidade_argumentos; $a++) {

        echo "Olá " . func_get_arg($a) . "\n";
    }
}

ola('Anderson ', 'Camila ', 'Rafael');


