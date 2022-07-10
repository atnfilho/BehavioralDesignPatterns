<?php

namespace Antonio\PhpDesignPatternI\Descontos;

use Antonio\PhpDesignPatternI\Orcamento;

class DescontoMaisDeCincoItens extends Desconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}