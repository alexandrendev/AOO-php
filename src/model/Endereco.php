<?php

class Endereco
{
    private $CEP;
    private $estado;
    private $cidade;
    private $rua;
    private $numero;
    private $complemento;

    public function __construct($CEP, $estado, $cidade, $rua, $numero, $complemento)
    {
        $this->CEP = $CEP;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }
}