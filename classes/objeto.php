<?php
require 'pessoa.php';
require 'conta.php';
require 'contaPoupanca.php';
require 'contaCorrente.php';



//Criando Objeto pessoa

// $anderson = new Pessoa(1,'Anderson Santos',1.70, 35,'12/04/1985','Técnico de Sistema','1400');

$contaPf= new Conta(1789,001,'29/12/2020',$anderson->nome, 'A1.camila321',2000,false);

// $contaPoupanca = new ContaPoupanca(1789,001,'29/12/2020',$anderson->nome, 'A1.camila321',2000,false,'29/12/2020','Fortaleza');


$contaCorrente = new ContaCorrente(1789,001,'29/12/2020',$anderson->nome, 'A1.camila321',2000,false,1000);

// $anderson->Crescer(0.20);
// echo'<pre>';
// var_dump($anderson);
// echo'</pre>';

// echo'<pre>';
// var_dump($contaPf);
// echo'</pre>';

// echo'<pre>';
// var_dump($contaPoupanca);
// echo'</pre>';

// echo'<pre>';
// var_dump($contaCorrente);
// echo'</pre>';



// $altura = number_format($anderson->altura,2);
// $salario = number_format($anderson->salario,2,',','.');
// $saldo = number_format($contaPf->saldo,2,',','.');

// $contaPoupanca->Retirar(1900);
// $contaCorrente->Retirar(2900);

// $contaCorrente->Saldo();
// $contaPf->ObterSaldo();

// $contaPf->zeraSaldo();

//  $contaPf->Depositar(3000);
 echo'<pre>';
 var_dump($contaPf);
 echo'</pre>';
 echo '<br>';

 echo '<br>';
 $contaCorrente->Saldo();
 echo '<br>';
 $contaCorrente->Retirar(100);
 $contaCorrente->Saldo();
 echo '<br>';


 // echo "{$anderson->nome} tem {$altura} de altura,  {$anderson->idade} anos nasceu em {$anderson->nascimento}, e é formado em {$anderson->escolaridade} e atualmente ganha como programador Jr, R$ {$salario} . " ;
// echo "<br>";

// echo"O Saldo atual da conta de {$contaPf->titular} é {$saldo}";





