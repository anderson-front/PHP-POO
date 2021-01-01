<?php

function var_static($quilometros)
{

static $total;

$total += $quilometros;

echo " Foi percorrido $quilometros  do total de  $total \n";  

}

// var_static(100);
// var_static(200);
// var_static(300);
// var_static(400);



