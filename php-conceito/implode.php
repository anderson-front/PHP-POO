<?php

//Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação entre cada elemento.

$array = array('lastname', 'email', 'phone');
$comma_separated = implode("*", $array);

print $comma_separated;


// php-conceitoConverte um array em uma string, separando os elementos do array por meio
// de um separador.
// array implode (string separador, array padrão)


