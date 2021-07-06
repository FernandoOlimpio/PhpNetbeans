<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../bd/Conecta.php';

class DaoPessoa {

    public $conn;

    function inserir(Pessoa $p) {
        $conn = new Conecta();
        if ($conn->conectadb()) {
            $nome = $p->getNome();
            $dtNasc = $p->getDtNasc();
            $login = $p->getLogin();
            $senha = $p->getSenha();
            $perfil = $p->getPerfil();
            $email = $p->getEmail();
            $cpf = $p->getCpf();
            $sql = "insert into pessoa values (null, '$nome', '$dtNasc', '$login', "
                    . "'$senha', '$perfil', '$email', '$cpf')";
            
            if (mysqli_query($conn->conectadb(), $sql)) {
                $msg = "<p style='color:green;'>Dados gravados com sucesso.</p>";
            } else {
                $msg = "<p style='color:red;'>Erro ao gravar.</p>";
            }
        } else {
            $msg = "<p style='color: red;'> Erro de DB.</p>";
        }
        mysqli_close($conn->conectadb());
        return $msg;
    }

}
