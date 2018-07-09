<?php 
	require_once "Control_Calc.php";
   class Calculadora{
	   
	   public $Calc;
	   public $Num1;
	   public $Num2;
	   
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
		 echo "A Subtracao dos Numeros eh: ". $Sub."<br>";
	 }
    public function Mult($Num1, $Num2){
		 $Mult = $Num1 * $Num2;
		 echo "Primeiro Numero: ". $Num1."<br>";
		 echo "Segundo Numero: ". $Num2."<br>";
		 echo "A Mult dos Numeros eh: ". $Mult."<br>";
	 }
	  public function Div($Num1, $Num2){
		 $Div = $Num1 / $Num2;
		 echo "Primeiro Numero: ". $Num1."<br>";
		 echo "Segundo Numero ". $Num2."<br>";
		 echo "A Divisao dos Numeros eh: ". $Div."<br>";
	 }
   }

?>