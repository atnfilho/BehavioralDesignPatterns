<?php

namespace Antonio\PhpDesignPatternI\EstadosOrcamento;

use Antonio\PhpDesignPatternI\Orcamento;
use EstadoOrcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Um orcamento finalizado não pode receber desconto.");
    }
}