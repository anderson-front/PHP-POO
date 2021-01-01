<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {

        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function DadosVendas()

    {
        return " Data da Venda: " . $this->data ."<br>". " Descrição do Produto: " . $this->produto ."<br>". "Quantidade: " .
            $this->quantidade ."<br>". "Valor Total: " . $this->valorTotal;
    }
}


$vender = new Venda("22/12/2020", "Geladeira", 1, 2500);

echo $vender->DadosVendas();
