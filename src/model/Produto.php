<?php

class Produto
{
    private $codigo;
    private $nome;
    private $valor;

    public function __construct($codigo, $nome, $valor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }
}