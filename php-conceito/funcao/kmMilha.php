<?php

//Demonstração de variáveis globais

$milha = 0.6;
function km2mi($km)
{
   global $milha;
   return $km * $milha;
}

