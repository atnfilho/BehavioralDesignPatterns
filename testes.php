<?php 


use Antonio\PhpDesignPatternI\CalculadoraDeImpostos;
use Antonio\PhpDesignPatternI\Impostos\Icms;
use Antonio\PhpDesignPatternI\Impostos\Iss;
use Antonio\PhpDesignPatternI\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());