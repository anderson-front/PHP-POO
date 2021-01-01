<?php
//Retorna um array de todas as chaves em array.

$array = array('verde' => '100', "cor" => "vermelho");
echo'<pre>';
var_dump(array_keys($array));
echo'</pre>';

$array = array("azul", "vermelho", "verde", "azul", "azul");
print_r(array_keys($array, "azul"));

$array = array("cor"     => array("azul", "vermelho", "verde"),
               "tamanho" => array("pequeno", "medio", "grande"));
print_r(array_keys($array));




echo'<hr>';
//Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação entre cada elemento.

echo $usando_implode = implode('-',$array);


// EXEMPLO

$new_user = array(
    "firstname" => $_POST['firstname'],
    "lastname"  => $_POST['lastname'],
    "email"     => $_POST['email'],
    "age"       => $_POST['age'],
    "location"  => $_POST['location']
  );


$sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",    "users",    implode(", ", array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );
//   "INSERT INTO users (firstname,lastname,email,age,location) values (:firstname,:lastname,:email,:location)"; 

echo $sql;






