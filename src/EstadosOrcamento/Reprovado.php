<?php

namespace Antonio\PhpDesignPatternI\EstadosOrcamento;

use Antonio\PhpDesignPatternI\Orcamento;
use EstadoOrcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Um orcamento reprovado não pode receber desconto.");
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado();
    }
}