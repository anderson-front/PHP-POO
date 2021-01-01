<?php

declare(strict_types=1);


try{
$pdo = new PDO('mysql:host=localhost;dbname=exemplo','root','');
}catch(PDOException $e){
    echo 'Erro de banco de dados'. $e->getMessage();
    die();
}catch(Exception $e){
    echo 'Erro Genérico'.$e->getMessage();
}
return true;

