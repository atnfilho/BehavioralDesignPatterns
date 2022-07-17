<?php

namespace Antonio\PhpDesignPatternI\Impostos;

use Antonio\PhpDesignPatternI\Orcamento;

class Ickv extends ImpostoComDuasAliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        echo "calculo da taxa máxima".PHP_EOL;
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        echo "calculo da taxa minima".PHP_EOL;
        return $orcamento->valor * 0.025;
    }
}