<?php

namespace Antonio\PhpDesignPatternI;

use Antonio\PhpDesignPatternI\Impostos\Imposto;
use Antonio\PhpDesignPatternI\Orcamento;

class CalculadoraDeImpostos {

    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}