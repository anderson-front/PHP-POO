<?php

class ContaCorrente extends Conta
{
    public $limite;

    public function __construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelada, $limite)
    {
        parent::__construct($agencia, $codigo, $data_criacao, $titular, $senha, $saldo, $cancelada);

        $this->limite = $limite;
    }

    public function Retirar($quantia)
    {
        $Cpmf = 0.05;

        if (($this->saldo + $this->limite) >= $quantia) {
            parent::Retirar($quantia);

            parent::Retirar($quantia*$Cpmf);
        } else {
            echo 'retirada Não permitida !';

            return false;
        }

        return true;
    }

    public function Saldo()
    
    {
        
       echo $this->saldo + $this->limite;     
    }
}
