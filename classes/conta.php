<?php
class Conta
{

    public $agencia;
    public $codigo;
    public $data_criacao;
    public $titular;
    public $senha;
    public $saldo;
    public $cancelada;

    public function __construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelada)
    {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->data_criacao = $data_criacao;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelada = false;
    }


    public function Retirar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo -= $quantia;
        }
    }


    public function Depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function obterSaldo()
    {

        return $this->saldo;
    }

    public function zeraSaldo()
    {
        $this->saldo = 0;
    }
}
