<?php
// Erro de divisão usando try castch Finally e lançando excessão


function divisao(int $num1, int $num2)
{
    

    if ($num1 == 0 || $num2 == 0) {
        throw new Exception('Não é possível dividir um número por zero!');
    }else{
        $result = $num1 / $num2;
        echo 'O valor da divisão nesta operação foi :'.$result;
    }
}

$valor1 = 0;
$valor2 = 2;

try {
    $result = divisao($valor1, $valor2);
} catch (Exception $e) {
    echo $e->getMessage();
}
