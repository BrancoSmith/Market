<?php   

		Class ClasseUsuario{
			private $nome;
			private $idade;
			private $cpf;
			private $tel;
			
			function getnome(){
				return $this->nome;
			}
			function setnome($nome){
				$this->nome = $nome;
			}
			function getidade(){
				return $this->idade;
			}
			function setidade($idade){
				$this->idade = $idade;
			}
			function getcpf(){
				return $this->cpf;
			}
			function setcpf($cpf){
				$this->cpf = $cpf;
			}
			function gettel(){
				return $this->tel;
			}
			function settel($tel){
				$this->tel = $tel;
			}
			
			
			
		}




?>