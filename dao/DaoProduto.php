<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'c:/xampp/htdocs/PhpNetbeans/bd/Conecta.php';
include_once 'c:/xampp/htdocs/PhpNetbeans/model/Produto.php';
class DaoProduto {
    
    public function inserir(Produto $produto){
      $conn= new Conecta();  
      if ($conn->conectadb()) {
          $nomeProduto = $produto->getNomeProduto();
          $vlrCompra = $produto->getVlrCompra();
          $vlrVenda = $produto->getVlrVenda();
          $qtdEstoque = $produto->getQtdEstoque();
        $sql = "insert into produto values (null, '$nomeProduto', '$vlrCompra',"
                . "'$vlrVenda', '$qtdEstoque')";
          
        if (mysqli_query($conn->conectadb(), $sql)) {
            $msg = "<p style= 'color:green;'>"
                    ."Dados cadastrados com sucesso.</p>";
        } else {
            $msg = "<p style= 'color:red;'>"
                    ."Erro na inserção dos dados.</p>";
        }
      } else {
          $msg = "<p style= 'color:red;'>"
                    ."Erro na conexão com o banco de dados.</p>";
      }
      mysqli_close($conn->conectadb());
      return $msg;
    }
    
    
    
}