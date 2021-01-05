<?php
namespace App\Estoque;

class Estoque
{
    private $total;

    function __construct()
    {
        $this->total = rand(0, 1000);
    }

    public  function getTotal()
    {

        echo $this->total;
    }
}
