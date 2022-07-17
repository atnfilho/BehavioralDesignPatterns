<?php

namespace Antonio\PhpDesignPatternI\EstadosOrcamento;

use Antonio\PhpDesignPatternI\Orcamento;
use EstadoOrcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finalizado(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado();
    }
}