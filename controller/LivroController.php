<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'c:/xampp/htdocs/PhpNetbeans/dao/DaoLivro.php';
include_once 'c:/xampp/htdocs/PhpNetbeans/model/Livro.php';
class LivroController{
    
    public function inserirLivro($titulo, $autor, $editora, $qtdEstoque) {
        $livro= new Livro();
        $livro->setTitulo($titulo);
        $livro->setAutor($autor);
        $livro->setEditora($editora);
        $livro->setQtdEstoque($qtdEstoque);
        
        $daoLivro= new DaoLivro;
        return $daoLivro->inserir($livro);
        
    }
    
    public function listarLivro() {
        $daoLivro= new DaoLivro();
        return $daoLivro->listar();
    }
    
    //método para excluir livro
    public function excluirLivro($id) {
        $daoLivro =  new DaoLivro;
        $daoLivro-> excluir($id);
        
    }
    
    //método para retornar objeto livro com os daods do BD
    public function pesquisar($id) {
        $daoLivro = new DaoLivro();
        return $daoLivro->pesquisar($id);
    }
    
    //método para editar livro
    public function editarLivro($id) {
        $daoLivro = new DaoLivro();
        return $daoLivro->editar($id);
    }
    //método para limpar formulário
    public function limpar() {
        return ;
    }
}