<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conecta
 *
 * @author 02520429135
 */
class Conecta {
    private $url = "localhost:3306";
    private $user = "root";
    private $password = "senac";
    private $base = "dbphpoo1";
    
    
    public function conectadb(){
        return mysqli_connect($this->url, $this->user, 
                $this->password, $this->base);
        
        
    }
            
   
}
