<?php

class ContaPoupanca extends Conta{

    public $aniversario;

    public function __construct($agencia,$codigo,$data_criacao,$titular,$senha,$saldo,$cancelada,$aniversario,$cidade)
    {
        parent::__construct($agencia,$codigo,$data_criacao,$titular,$senha,$saldo,$cancelada); 
        
        $this->aniversario=$aniversario;
        $this->cidade = $cidade;
    }


    public function Retirar($quantia){
        if($this->saldo >= $quantia){
          
           parent::Retirar($quantia);
        }else{
            echo 'Retirada não Permitida';
            return false;
        }

        return true;
    }

    

}