<?php

namespace classes;
trait DigitalUser{
    
    private $email;
    
    function getEmail(){
        return $this->email;
    }
    
    function setEmail($email){
        $this->email = $email;
    }
    
}

