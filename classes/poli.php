<?php
require 'pessoa.php';
require 'conta.php';
require 'contaPoupanca.php';
require 'contaCorrente.php';

$pessoa = new Pessoa(001,'Anderson Santos',1.70,35,'12-04-1985','Formação Técnica',1400);

$contas[2] = new ContaPoupanca(123,001,'01/01/2021',$pessoa,123,500,false,'01/01/2021','fortaleza');

// $conta[3] = new ContaCorrente(123,0002,'01/01/2021',$pessoa,123,0,false,1000);

foreach ($contas as $key=>$conta){

    echo "Manipulando a conta  $key de: {$conta->titular->nome}<br>";
    echo "Obtendo o saldo da conta $key de:
    R$ {$conta->obterSaldo()}";
    
    // echo "Realizando depósito na conta $key {$conta->Depositar(100)}{$conta->ObterSaldo()}<br>";
    // echo "Realizando a Retirada da conta $key {$conta->Retirar(50)}\n {$conta->ObterSaldo()}<br>";
}



