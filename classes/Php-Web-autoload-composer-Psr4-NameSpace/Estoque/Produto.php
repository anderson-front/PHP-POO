<?php

class Produto
{
    public $id, $descricao,$qtd;

    public function cadastrar($id, $descricao,$qtd)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->qtd = $qtd;
    }

    public function imprimir()
    {

        $r = 'Produto Id: ' . $this->id . ' | ';
        $r  .= 'Descrição:' . $this->descricao . '<br>' ;
        $r  .= 'Descrição:' . $this->qtd. '<br>' ;
        return $r;
    }
}
