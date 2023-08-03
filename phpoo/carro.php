<?php
class carro{
    public $marca;
    public $modelo;
    public $ano;

    function __construct($marca,$modelo,$ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano =$ano;
    }
    function get_marca(){
        return $this->marca;
    }
    function get_modelo(){
        return $this->modelo;
    }
    function get_ano(){
        return $this->ano;
    }
    function apresentar(){
        return "<br>Olá, meu nome é ".$this->get_marca()."  ,tenho ". $this->get_modelo()."  anos e sou ".$this->get_ano(); 
    }
}




?>