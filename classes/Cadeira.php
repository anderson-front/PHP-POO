<?php

class Cadeira
{
    public $bracos;
    public $cor;
    public $tamanho;
    public $material;

public function __construct($bracos,$cor,$tamanho,$material)
{
    $this-> bracos = $bracos;
    $this-> cor = $cor;
    $this-> tamanho = $tamanho;
    $this-> material = $material;
}

    public function sentar()
    {
        return "Sentaddo na cadeira";
    }
    public function levantar()
    {
        return "Levantando da cadeira";
    }
    public function limpar()
    {
        return "Limpando a cadeira";
    }
    public function consertar()
    {
        return "Ajeitando a cadeira";
    }


}

$asento = new Cadeira(2,"branca","media","plastico");

echo $asento ->sentar();
