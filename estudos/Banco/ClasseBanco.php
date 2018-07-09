<?php
   class ClasseContaBanco{
	   public $numeroConta;
	   public $tipo;
	   public $dono;
	   private $saldo;
	   private $status;
	   
	   public function getnumeroConta(){
		   return $this->numeroConta;
	   }
	   public function setnumeroConta($numeroConta){
		   $this->numeroConta = $numeroConta;
	   }
	   public function getTipo(){
		   return $this->tipo;
	   }
	   public function setTipo($tipo){
		   $this->tipo = $tipo;
	   }
	   public function getDono(){
		   return $this->dono;
	   }
	   public function setDono($dono){
		   $this->dono = $dono;
	   }
	   public function getSaldo(){
		   return $this->saldo;
	   }
	   public function setSaldo($saldo){
		   $this->saldo= $saldo;
	   }
	   public function getStatus(){
		   return $this->status;
	   }
	   public function setStatus($status){
		   $this->status = $status;
	   }
	   
	   
	    public function __construct(){
		   $this->setSaldo(0);
		   $this->setStatus(false);
		   echo "<p>Conta criada com sucesso</p>";
	   }
	   public function abrirConta($tipo){
		   $this->setTipo($tipo);
		   $this->setStatus(true);
				if($tipo == "CCorrente"){
					$this->setSaldo(50);
				}elseif($tipo == "CPoupança"){
					$this->setSaldo(150);
				}
	   }
	   public function fecharConta(){
		   if ($this->getSaldo() > 0){
			   echo "Conta ainda contem dinheiro, não posso fechá-la!!!";
		   }elseif($this->getSaldo() < 0){
			   echo "Conta está com débito. Impossivel encerrar!!!";
		   }else{
			   $this->setStatus(false); 
			   echo "Conta encerrada com sucesso!!!";
		   }
	   }
	   public function depositar($valor){
		   if ($this->getStatus()){
			   $this->setSaldo($this->getSaldo() + $valor);
		   }else{
			   echo "Conta fechada. Impossivel depositar!!! ";
		   }
	   }
	   public function sacar($valor){
		   if($this->getStatus()){
			   if($this->getSaldo() >= $valor){
				   $this->setSaldo($this->getSaldo() - $valor);
			   }else{
				   echo "Saldo insuficiente para saque!!!";
			   }
		   }else "Impossivel sacar, conta não existente";
	   }
	   public function pagarMensalidade(){
		   if ($this->getTipo() == "CCorrente"){
			   $valor = 12;
		   }elseif ($this->getTipo() == "CPoupança"){
			   $valor = 20;
		   }
		   if($this->getStatus()){
			   $this->setSaldo($this->getSaldo() - $valor);
		   }else{
			   echo"Problemas com a conta. Não posso cobrar";
		   }
	   }
	  
	   
	   
	   
	   
	   
	   
   }




?>