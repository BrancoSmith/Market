<?php
  require_once "ClasseCalc.php";
		if (empty($_POST["Calc"])){ $_POST["Calc"] = "";}
		if (empty($_POST["Num1"])){ $_POST["Num1"] = "";} 
		if (empty($_POST["Num2"])){ $_POST["Num2"] = "";}

		$Calc = $_POST["Calc"];
		$Num1 = $_POST["Num1"];
		$Num2 = $_POST["Num2"];

		$n1 = new Calculadora();
		//$n1->interpreta($Calc, $Num1, $Num2);
		
			if($Calc == 1){
				$n1->Soma($Num1, $Num2);
				
			}
			if($Calc == 2){
				$n1->Sub($Num1, $Num2);
			}
			if($Calc == 3){
				$n1->Mult($Num1, $Num2);
			}
			if($Calc == 4){
				$n1->Div($Num1, $Num2);
			}
			
		  
		  
		  
	    
   
   
    
  
  
?>
<html><body><li><a href="index.php" title="Voltar ao inicio">Voltar ao inicio</a></li><body></html>
