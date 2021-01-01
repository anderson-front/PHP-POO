<?php

//LER ARQUIVO E JOGAR EM ARRAY

$arquivo = file("arquivo.txt");

echo $arquivo [0]."<br>";
echo $arquivo [1]."<br>";
echo'<pre>';
var_dump($arquivo);
echo'</pre>';
