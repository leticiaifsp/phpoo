<?php
class usuario{
    public $nome;
    public $email;
    public $senha;
 
    function__construct($nome, $email, $senha){
    $this->nome= $nome;
    $this->email =$email;
    $this->senha= $senha;
    }
    function get_nome(){
        return $this->nome;
    }
    function set_nome(){
        $this->nome =$nome;
    }

    function get_email(){
        return $this->email;
    }
    function set_email(){
        $this->email =$email;
    }

    function get_senha(){
        return $this->senha;
    }
    function set_senha(){
        $this->senha =$senha;

    }   

    include "login.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        
    }



}

?>
