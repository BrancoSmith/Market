<?php
 
 class Caixa {
     
    private $registro = [];
    

    public function getResgistro(){
        return $this->registro;
    }
    public function setRegistro($registro){
        $this->registro = $registro;
    }

    public function vendasRealizadas(){
       if(count($this->registro ) > 0){ 
            foreach ($this->registro as $cliente => $veiculo) {
            echo "Cliente: ".$cliente."  \nVeiculo: ".$veiculo. "\n\n";
            }
        }else{
            echo"\n\nNenhuma venda realizada!!!";
        }
		
     } 
     public function registraVenda($cliente, $veiculo){
         $this->registro[$cliente] = $veiculo;
            echo "\nVenda do  ".$veiculo."  Realizada com sucesso!!!\n\n";
		 
     } 
   

}
 

?>