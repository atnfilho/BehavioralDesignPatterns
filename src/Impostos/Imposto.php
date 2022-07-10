<?php 

namespace Antonio\PhpDesignPatternI\Impostos;

use Antonio\PhpDesignPatternI\Orcamento;

interface Imposto 
{
    public function calculaImposto(Orcamento $orcamento): float;
}