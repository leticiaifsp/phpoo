<?php
require ("pessoa.php");
require("carro.php");
require("retangulo.php");
class Fruta{
    //atributos
    public $nome;
    public $cor;

    //métodos
    function __construct($nome,$cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }


    function set_name($nome){
        $this->nome = $nome;

    }
    function get_name(){
        return $this->nome;

    }

    function set_cor($cor){
        $this->cor = $cor;
    
    }
        function get_cor(){
        return $this->cor;
    
    }
    
}
$maca = new Fruta("maca_ifsp_turmaB", "vermelho");
$banana = new Fruta("banana_ifsp_turmaB", "amarelo");


//criando um objeto

/* $maca->set_name("maca_ifsp_turmaB");
$banana->set_name("banana_ifsp_turmaB"); */

//echo $maca->nome;
echo $maca->get_name();
echo "<br>" . $banana->get_name();

$aluno1= new pessoa ("Leticia", 18,  "Médica");
$aluno2= new pessoa ("Vinicius", 18, "Psicologo");

echo $aluno1->apresentar();
echo $aluno2->apresentar();

$carro1= new carro ("Fiat", "mobi",  "2023");
$carro2= new carro ("Honda", "civic", "2015");

echo $carro1->apresentar();
echo $carro2->apresentar();

$retangulo1= new retangulo (2,4);
$retangulo2= new retangulo (2,4);


echo "<br>area do retangulo= ".$retangulo1->calcular_area();
echo "<br>perimetro do retangulo=" .$retangulo2->calcular_perimetro();

?>