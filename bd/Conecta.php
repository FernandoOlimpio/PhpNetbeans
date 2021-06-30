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
    
    public $db;
    
    public function _construct() {
        $db = $this -> conectadb;
    }
    
    
    public static function conectadb(){
        $db = mysqli_connect($this ->getUrl(), $this ->getUser(), 
                $this ->getPassword(), $this ->getBase());
        
        return $db;
    }
            
    function getUrl() {
        return $this->url;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getBase() {
        return $this->base;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setBase($base) {
        $this->base = $base;
    }


}
