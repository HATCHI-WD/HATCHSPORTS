<?php
    class Registro{

         private $_email;
         private $_username;
         private $_password;
    public function __construct($email, $username, $password){
        $this-> _email = $email;
        $this-> _username = $username;
        $this-> _password = $password;
    }
    public function getEmail()
    {
        return $this->_email;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function getPass()
    {
        return $this->_password;
    }
    public function setEmail($email){
       return $this-> _email = $email;
    }
    public function setUsername($username){
        return $this-> _username = $username;
    }

    public function setPass($password){
        return $this-> _password = $password;
    }

    public function compare($_password, $confirmpass=$_POST['conffirm'] )
    {

        if(getPass()===$confirmpass)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    $a=$_POST['email'];
    $b=$_POST['username'];
    $c=$_POST['contra'];
    setEmail($a);
    setUsername($b);
    setPass($c);
    



    }
    