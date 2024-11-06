<?php

class Funcionario extends Pessoa
{
    private $dataAdmissao;
    private $recisao;

    public function cadastrarCliente()
    {
        echo "Cliente cadastrado com sucesso";
    }

    public function consultarCliente()
    {
        echo "Cliente consultado com sucesso";
    }

    public function alterarCliente()
    {
        echo "Cliente alterado com sucesso";
    }

    public function casdastrarFornecedor()
    {
        echo "Fornecedor cadastrado com sucesso";
    }

    public function consultarFornecedor()
    {
        echo "Fornecedor consultado com sucesso";
    }

    public function alterarFornecedor()
    {
        echo "Fornecedor alterado com sucesso";
    }

    public function __construct($codigo, $nome, $dataNascimento, $identidade, $dataAdmissao, $recisao)
    {
        parent::__construct($codigo, $nome, $dataNascimento, $identidade);
        $this->dataAdmissao = $dataAdmissao;
        $this->recisao = $recisao;
    }

    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    public function getRecisao()
    {
        return $this->recisao;
    }
    
    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function setRecisao($recisao)
    {
        $this->recisao = $recisao;
    }
}