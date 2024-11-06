<?php

class Fornecedor
{
    private $codigo;
    private $razao;
    private $nomeFantasia;
    private $inscricaoEstadual;
    private $CNPJ;

    public function __construct($codigo, $razao, $nomeFantasia, $inscricaoEstadual, $CNPJ)
    {
        $this->codigo = $codigo;
        $this->razao = $razao;
        $this->nomeFantasia = $nomeFantasia;
        $this->inscricaoEstadual = $inscricaoEstadual;
        $this->CNPJ = $CNPJ;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getRazao()
    {
        return $this->razao;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    public function getInscricaoEstadual()
    {
        return $this->inscricaoEstadual;
    }

    public function getCNPJ()
    {
        return $this->CNPJ;
    }
    
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setRazao($razao)
    {
        $this->razao = $razao;
    }

    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setInscricaoEstadual($inscricaoEstadual)
    {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
    }
}