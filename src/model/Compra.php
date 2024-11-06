<?php

class Compra
{
    private $codigo;
    private $notaFiscal;
    private $codigoProduto;
    private $quantidade;
    private $codigoFornecedor;
    private $dataCompra;

    public function __construct($codigo, $notaFiscal, $codigoProduto, $quantidade, $codigoFornecedor, $dataCompra)
    {
        $this->codigo = $codigo;
        $this->notaFiscal = $notaFiscal;
        $this->codigoProduto = $codigoProduto;
        $this->quantidade = $quantidade;
        $this->codigoFornecedor = $codigoFornecedor;
        $this->dataCompra = $dataCompra;
    }
}