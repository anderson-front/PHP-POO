<?php

class Pessoa
{
    public $codigo;
    public $nome;
    public $altura;
    public $idade;
    public $nascimento;
    public $escolaridade;
    public $salario;


    public function __construct($codigo,$nome,$altura,$idade,$nascimento,$escolaridade,$salario)
    {
        $this->codigo = $codigo;
        $this->nome =$nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;
    }

    public function Crescer($centimetros)
    {

        if ($centimetros > 0) {
            $this->altura += $centimetros;
        }
    }

    public function Formar($titulacao){
        $this->escolaridade = $titulacao;
    }


    public function Envelhecer($anos){
        if($anos > 0){
          $this->idade += $anos;
        }
    }
}
