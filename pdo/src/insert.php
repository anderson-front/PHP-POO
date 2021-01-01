<?php

declare(strict_types=1);

require 'connect.php';

$estado = $pdo->prepare("insert into produtos(descricao) values(:desc)");
$estado->bindValue(":desc","Novo Produto");
$estado->execute();
echo $estado->rowCount();







