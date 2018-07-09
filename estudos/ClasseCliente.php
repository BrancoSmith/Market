<?php
    require_once "ClasseVeiculo.php";
    require_once "ClasseVendedor.php";
    class Cliente {
        private $nome;
        private $cpf;
        private $telefone;
        private $endereco;
        
        public function getNome(){
            return $this->nome;;
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
        
    public function consultaVeiculo($veiculo,$nomeVeiculo,$vendedor){
        $vendedor->verificarVeiculo($veiculo,$nomeVeiculo,$vendedor);
		
    }
    public function confirmaCompra($cliente,$veiculo,$vendedor){
		$vendedor->finalizarVenda($cliente, $veiculo,$vendedor);
	 }
    }

?>