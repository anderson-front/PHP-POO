<?php

function __autoload($class_name){
    $dir = 'Vendas/'.$class_name.'.php';
    
    if(file_exists($dir)){
        require $dir;
    }
}