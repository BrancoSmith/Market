<?php

abstract class ClasseConexao {
   
    public static function getInstance(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=usuario", "root","" );
            $pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $exc ) {
            echo $exc->getMessage();
            
        }
            
        
    }
}


?>