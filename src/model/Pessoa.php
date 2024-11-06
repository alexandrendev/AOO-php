<?php

class Pessoa
{
    private $codigo;
    private $nome;
    private $dataNascimento;
    private $identidade;

    public function __construct($codigo, $nome, $dataNascimento, $identidade)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->identidade = $identidade;
    }
    
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getIdentidade()
    {
        return $this->identidade;
    }
}