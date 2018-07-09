<?php 
        if (empty($_POST["nome"])){ $_POST["Calc"] = "";}
		if (empty($_POST["idade"])){ $_POST["Num1"] = "";} 
		if (empty($_POST["cpf"])){ $_POST["Num2"] = "";}
		if (empty($_POST["tel"])){ $_POST["tel"] = "";}
		
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$cpf = $_POST['cpf'];
		$tel = $_POST['tel'];

		
		echo "Usuario Cadastrado com Sucesso<br><br>";
		echo "Nome :".$nome."<br>";
		echo "Idade :".$idade."<br>";
		echo " Cpf :".$cpf."<br>";
		echo "Telefone :".$tel."<br>";
		
		
		
		//$u = new usuario();
		
		//$u->CadastrarUsuario($nome,$idade,$cpf,$tel);
		
			//if(CadastrarUsuario){
				//	echo "Usuario Cadastrado com Sucesso";
					//echo "Nome".$nome;
					//echo "tel".$tel;
					//echo "cpd".$cpf;
					//echo "idade".$idade;
			//}else{
				//echo"Usuario Não Cadastrado";
			//}





?><html><body><li><a href="index.php" title="Voltar ao inicio">Voltar ao inicio</a></li><body></html>