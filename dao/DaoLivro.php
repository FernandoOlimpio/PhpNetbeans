<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'c:/xampp/htdocs/PhpNetbeans/bd/ConectaLivro.php';
include_once 'c:/xampp/htdocs/PhpNetbeans/model/Livro.php';
class DaoLivro {

    public function inserir(Livro $livro) {

        $conn = new ConectaLivro();
        if ($conn->conectadb()) {
            $titulo = $livro->getTitulo();
            $autor = $livro->getAutor();
            $editora = $livro->getEditora();
            $qtdEstoque = $livro->getQtdEstoque();
            
            $sql= "insert into livro values(null, '$titulo', '$autor', '$editora',
                    '$qtdEstoque')";
            
            if (mysqli_query($conn->conectadb(), $sql)) {
                $msg= "<p style='color:green;'>Dados gravados com sucesso.</p>";
            }else{
                $msg= "<p style='color:red;'>Erro ao gravar.</p>";
            }
            
        }else{
            $msg= "<p style='color: red;'> Erro de DB.</p>";
        }
        mysqli_close($conn->conectadb());
        return $msg;
    }

}