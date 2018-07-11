<?php

 class Catalogo {
     private $veiculo;

    public function getVeiculos(){
        return $this->veiculo;
    }
    public function getPreco($nomeVeiculo){
        return $this->veiculo[$nomeVeiculo];
    }
    public function setVeiculo($veiculo, $preco){
        $this->veiculo[$veiculo] = $preco;
    }
   
    public function __construct(){
        
        $this->veiculo["camaro ss 2018"] = 185;
        $this->veiculo["porsche"] = 215;
        $this->veiculo["mustang"] = 255;
        $this->veiculo["corvette 2018"]= 455;
    }
    public function mostrarVeiculos(){
        foreach ($this->veiculo as $chave => $preco) {
            echo $chave."\n Preço: R$ ".$preco. "\n\n";
        }
    }
     public function hasVeiculo($nomeVeiculo){
        if(isset($this->veiculo[$nomeVeiculo])){
           return true;
        }
        else {
            return false;
        }
    }
    


 }
?>