<pre>
<?php

	require_once "ClasseBanco.php";
	
	$p1 = new ClasseContaBanco();
	$p2 = new ClasseContaBanco();

	$p1->abrirConta("CCorrente");
	$p1->setDono("marco");
	$p1->setnumeroConta(001);
	$p1->depositar(500);
	$p1->sacar(500);
	$p1->pagarMensalidade();
	$p1->sacar(38);
	$p1->fecharConta();

	
	$p2->abrirConta("CPoupança");
	$p2->setnumeroConta(002);
	$p2->setDono("matheus");
	$p2->depositar(600);
	$p2->sacar(200);
	$p2->pagarMensalidade();
	$p2->sacar(530);
	$p2->fecharConta();

print_r($p1);
print_r($p2);
?>

</pre>
