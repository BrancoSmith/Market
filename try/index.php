<?php
 $num = 19;



 try{
    if ($num<15) throw new Exception("Error 1", 1);
    if ($num>10) throw new Exception("Error 2", 1);
    if ($num==11)('Sucesso');
  

 }catch(Exception $e){
     $e->getMessage();
 }
?>