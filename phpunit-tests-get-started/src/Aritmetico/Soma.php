<?php
    namespace CodeExperts\Aritmetico;

    use PHPUnit\Framework\MockObject\Stub\Exception;


    Class Soma {

    private $num1;
    private $num2;

	public function getNum1()
	{
		return $this->num1;
	}

	public function setNum1($num1)
	{
		
		if(!is_numeric($num1)) throw new \Exception('O 1 parametro tem que ser numeral');
		if($num1 < 0) throw new \Exception('O parametro 1 nao pode ser negativo');
		$this->num1 = $num1;

		
	}

	public function getNum2()
	{
		return $this->num2;
	}

	public function setNum2($num2)
	{
		if(!is_numeric($num2)) throw new \Exception('O 2 argumento tem que ser numeral');
		if($num2 < 0) throw new \Exception('O parametro 2 nao pode ser negativo');
		$this->num2 = $num2;
	}



    
    public function somar(){
        return $this->num1 + $this->num2;
    }

    }


?>