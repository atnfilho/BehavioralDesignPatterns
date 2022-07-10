<?php

namespace Antonio\PhpDesignPatternI\Impostos;

use Antonio\PhpDesignPatternI\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float 
    {
        return $orcamento->valor * 0.1;
    }
}