<?php
    class Registro{
         private $_email;
         private $_username;
         private $_password;
         private $_confpass;

    public function getEmail(){
        return $this->_email;
    }
    public function getUsername(){
        return $this->_username;
    }
    public function getPass(){
        return $this->_password;
    }
    public function compare($pass , $confirmpass){
        $this->_password = $pass;
        $this ->_confpass = $confirmpass;
        if($pass===$confirmpass){
            return true;
        }else{
            return false;
        }
    }



    }