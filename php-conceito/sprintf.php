<?php

printf('%s', 'Uma String!');

echo '<hr>';

$hora = array(
    9,
    14,
    'AM'
);

$estou = 'Escrevendo';

printf('São %d:%d%s e estou %s.',$hora[0],$hora[1],$hora[2],$estou);


echo '<hr>';


$variavel = sprintf('Tenho %s anos', 35);

echo $variavel;

