<?php

namespace App\Models;

class User{
    public $first_name;
    public $last_name;
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }
    public function getFirstName(){
        return "Rana";
    }

    public function setLastName($last_name){
        $this->last_name=$last_name;
    }
    public function getLastName(){
        return "Sarkar";
    }

    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return "rana@gmail.com";
    }

    public function getEmailVariables(){
        return [
            'full_name'=>$this->first_name.' '.$this->last_name,
            'email'=>$this->getEmail(),
        ];
    }
    
}

?>