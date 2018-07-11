<pre><?php
 

 require_once "ClasseCatalogo.php";
 require_once "ClasseCaixa.php";
 require_once "ClasseVendedor.php";

 $caixa = new caixa();
 $catalogo = new catalogo();
 $vendedor = new Vendedor("marco",55482445, 9855855, "Setor Presidencial");

 //$catalago->mostrarVeiculos();

 //$vendedor->consultaVeiculo($catalogo, "camaro ss 2018");
$vendedor->finalizaVenda($caixa,"alan", "camaro ss 2018");
 
 //$vendedor->consultaVeiculo($veiculo, "porsche");
 //$vendedor->finalizaVenda($venda,"tiao", "porsche");
 
 //$vendedor->consultaVeiculo($veiculo, "mustang");
 //$vendedor->finalizaVenda($venda,"john",  "mustang");

  // $venda->vendasRealizadas();
  //print_r($vendedor);
  
  
 

?></pre>