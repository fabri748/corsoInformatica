<?php

namespace Classes;

trait Table{
    private $conn='';
    private $database = '';  
    private $user ='';
    private $password='';
    private $table = '';
    
    static function init($conn, $database, $user, $password, $table){
        $this->conn = $conn;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->table = $table;
    }
    
    static function loadFromDb(){
        $instance = null;
        
        return $instace;
        
    }
}
