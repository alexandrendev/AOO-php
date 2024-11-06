<?php

class Cliente extends Pessoa
{
    private $dataCadastro;
    private $valorEmAberto;
    
    public function tiraExtrato()
    {
        return $this->valorEmAberto;
    }

    public function efetuarPagamento($valor)
    {
        echo "Pagamento efetuado com sucesso";
    }
    
    public function __construct($codigo, $nome, $dataNascimento, $identidade, $dataCadastro, $valorEmAberto)
    {
        parent::__construct($codigo, $nome, $dataNascimento, $identidade);
        $this->dataCadastro = $dataCadastro;
        $this->valorEmAberto = $valorEmAberto;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    public function getValorEmAberto()
    {
        return $this->valorEmAberto;
    }

    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function setValorEmAberto($valorEmAberto)
    {
        $this->valorEmAberto = $valorEmAberto;
    }
}