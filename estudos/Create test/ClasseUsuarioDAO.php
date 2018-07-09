<?php 

require_once "ClasseConexao.php";

	Class ClasseUsuarioDao{
		
		public function CadastrarUsuario(ClasseUsuario $usuario){
		try{
			$pdo = ClasseConexao::getInstance();
			$sql = "INSERT INTO cliente(nome,idade,cpf,tel)VALUES(?,?,?,?)";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(1, $u->getnome());
			$stmt->bindValue(1, $u->getidade());
			$stmt->bindValue(1, $u->getcpf());
			$stmt->bindValue(1, $u->gettel());
			return $stmt->execute();
		} catch(PDOException $exc){
			echo $exc->getMessage();
		  }
		
		
		
	     }
	}

?>