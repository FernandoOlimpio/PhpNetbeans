<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Produto {

    private $nomeProduto;
    private $vlrCompra;
    private $vlrVenda;
    private $qtdEstoque;
    
    function getNomeProduto() {
        return $this->nomeProduto;
    }

    function getVlrCompra() {
        return $this->vlrCompra;
    }

    function getVlrVenda() {
        return $this->vlrVenda;
    }

    function getQtdEstoque() {
        return $this->qtdEstoque;
    }

    function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }

    function setVlrCompra($vlrCompra) {
        $this->vlrCompra = $vlrCompra;
    }

    function setVlrVenda($vlrVenda) {
        $this->vlrVenda = $vlrVenda;
    }

    function setQtdEstoque($qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }



}
