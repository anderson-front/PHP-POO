<?php

function fatorial($numero)
{
    if($numero == 1)
    {
        return $numero ;
    }else{
       return $numero * fatorial($numero -1);
    }

}

echo fatorial(1).PHP_EOL;
echo fatorial(2).PHP_EOL;
echo fatorial(3).PHP_EOL;
echo fatorial(4).PHP_EOL;
echo fatorial(5);
