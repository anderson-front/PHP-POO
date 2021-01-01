<?php

// function validaUsuario(array $usuario)
// {
//     if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
//         return false;
//     }
//         return true;
// }


//array
// $usuario= [
//    'codigo' => 1,
//    'nome' => 'Anderson',
//    'idade' => 35,
// ];

// Outra forma de declarar um array
// $usuario = array('codigo' =>1,'nome' =>'Anderson Santos', 'idade' => 35);


// $usuarioValido = validaUsuario($usuario);

// if(!$usuarioValido){
//    echo 'Usuário inválido';
//    return false;
// }else{
//     echo 'Usuário Válido';
// }


//Usando Excessões.


function validaUsuario(array $usuario)
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        throw new Exception('Campos Obrigatórios não foram preenchidos');
    }
        return true;
}


$usuario = array('codigo' =>1,'nome' =>'', 'idade' => 35);

try{
    $status = validaUsuario($usuario);
} catch(Exception $e){
    echo $e->getMessage();
    die();
} finally{
    echo 'Status da Operação: '.(int)$status; // cast
}







