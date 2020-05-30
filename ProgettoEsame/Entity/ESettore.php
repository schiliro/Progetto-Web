<?php


class ESettore
{   //Attributi
    private $nome="";
    //Costruttore
    public function __construct($nome){
        $this->nome=$nome;
    }
    //Metodi
    public function getNome(){
        return $this->nome;
    }
    public function setNome($name=""){
        $this->nome=$name;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return  $this->nome;
    }
}