<?php
//Modo Primitivo de trabalhar com datas do PHP.
echo date('d/m/Y').PHP_EOL;

//Trabalhando com datas usando a Class DateTime.
//Comanda semelhante a forma primitiva

$data = new DateTime();
echo $data -> format('d-m-Y H:i:s').PHP_EOL;
$intervalo = new DateInterval('PT3M');
$data->sub($intervalo);
var_dump($data);

$data = new DateTime();
echo $data -> format('d-m-Y H:i:s').PHP_EOL;
$intervalo = new DateInterval('P5DT10H50M');
$data->sub($intervalo);
echo'<pre>';
print_r($data);
echo'</pre>';

