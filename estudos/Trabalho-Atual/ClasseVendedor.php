<?php
 
 class Vendedor 
 {
     private $nome;
     private $cpf;
     private $telefone;
     private $endereco;

     public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function __construct($nome,$cpf,$telefone,$endereco){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
    public function consultaVeiculo($catalogo, $nomeVeiculo){
        if($catalogo->hasVeiculo($nomeVeiculo)){
            echo "O veiculo está disponivel: "."\n".$nomeVeiculo. "\n Valor: ".$catalogo->getPreco($nomeVeiculo);
        }
        else {
            echo "O veiculo não está disponivel!!!\n";
        }
    }
     public function finalizaVenda($caixa, $cliente , $veiculo){
        if(strlen($cliente) > 3){
            if(ctype_alpha($cliente)){
                $caixa->registraVenda($cliente,$veiculo);
            }else{
                echo "\n Nome deve conter somente Letras.\n";
            }
        }else{
            echo "\n O nome deve conter no minimo 3 letras.\n";
        }
        
       
		
     }
    
}

?>