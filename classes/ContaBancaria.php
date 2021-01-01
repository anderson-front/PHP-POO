<?php
class ContaBancaria
{


    public $nomeTitular;

    public  $numeroAg;

    public  $numeroConta;

    private  $saldo;

    public function __construct(
        $nomeTitular,
        $numeroAg,
        $numeroConta,
        float $saldo
    ) {
        $this->nomeTitular = $nomeTitular;
        $this->numeroAg = $numeroAg;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return "O Seu Saldo atual é: " . $this->saldo . "<BR>";
    }
}

$conta = new ContaBancaria("Anderson Santos", "3827", "1237-9", 1000);
echo $conta->obterSaldo();
echo $conta->nomeTitular;
