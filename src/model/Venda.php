<?php

class Venda
{
    private $codigo;
    private $codigoCliente;
    private $dataVenda;
    private $codigoProduto;
    private $quantidade;
    private $valor;
    private $subtotal;
    private $formaPagamento;

    public function __construct($codigo, $codigoCliente, $dataVenda, $codigoProduto, $quantidade, $valor, $subtotal, $formaPagamento)
    {
        $this->codigo = $codigo;
        $this->codigoCliente = $codigoCliente;
        $this->dataVenda = $dataVenda;
        $this->codigoProduto = $codigoProduto;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->subtotal = $subtotal;
        $this->formaPagamento = $formaPagamento;
    }
}