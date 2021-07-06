<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ConectaLivro {
    private $endereco= "localhost:3306";
    private $usuario= "root";
    private $senha= "senac";
    private $banco= "dblivro";
    
    public function conectadb() {
        return mysqli_connect(
                $this-> endereco,
                $this-> usuario,
                $this-> senha,
                $this-> banco);
        
    }
    
}
