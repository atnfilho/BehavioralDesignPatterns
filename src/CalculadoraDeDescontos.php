<?php

namespace Antonio\PhpDesignPatternI;

use Antonio\PhpDesignPatternI\Descontos\DescontoMaisDeCincoItens;
use Antonio\PhpDesignPatternI\Descontos\DescontoMaisDeQuinhentosReais;
use Antonio\PhpDesignPatternI\Descontos\SemDesconto;
use Antonio\PhpDesignPatternI\Orcamento;

class CalculadoraDeDescontos 
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoMaisDeQuinhentosReais(
                new SemDesconto()
            )
        );
        
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }

}