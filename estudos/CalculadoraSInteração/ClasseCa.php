<?php 
	require_once "index.php";
   class Calculadora{
	 public function Soma($Num1, $Num2){
		 $Soma = $Num1 + $Num2;
		 echo "Primeiro Numero: ". $Num1 ."<br>";
		 echo "Segundo Numero: ". $Num2."<br>";
		 echo "A soma dos Numeros eh ". $Soma."<br>";
	 }
	  public function Sub($Num1, $Num2){
		 $Sub = $Num1 - $Num2;
		 echo "Primeiro Numero: ". $Num1."<br>";
		 echo "Segundo Numero: ". $Num2."<br>";
		 echo "A soma dos Numeros eh: ". $Sub."<br>";
	 }
    public function Mult($Num1, $Num2){
		 $Mult = $Num1 * $Num2;
		 echo "Primeiro Numero: ". $Num1."<br>";
		 echo "Segundo Numero: ". $Num2."<br>";
		 echo "A soma dos Numeros eh: ". $Mult."<br>";
	 }
	  public function Div($Num1, $Num2){
		 $Div = $Num1 / $Num2;
		 echo "Primeiro Numero: ". $Num1."<br>";
		 echo "Segundo Numero ". $Num2."<br>";
		 echo "A soma dos Numeros eh: ". $Div."<br>";
	 }
   }

?>