<?php

use Antonio\PhpDesignPatternI\CalculadoraDeDescontos;
use Antonio\PhpDesignPatternI\CalculadoraDeImpostos;
use Antonio\PhpDesignPatternI\Impostos\Icms;
use Antonio\PhpDesignPatternI\Impostos\Iss;
use Antonio\PhpDesignPatternI\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();
$calculadoraDescontos = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

// echo $calculadora->calcula($orcamento, new Iss());
echo $calculadoraDescontos->calculaDescontos($orcamento);