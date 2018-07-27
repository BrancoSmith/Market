<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;


    Class SomaTest extends TestCase {
        
        
        public function testSomaDoisNumeros(){

            $soma = new Soma();
            $soma->setNum1(10);
            $soma->setNum2(20);

            $this->assertEquals(30, $soma->somar());
        }
        /**
        * @expectedException \Exception
        *@expectedExceptionMessage O 1 parametro tem que ser numeral
        */
        public function testErroSeSaoNumeral1(){

            $soma = new Soma();
            $soma->setNum1('marco');

        }
        /**
        * @expectedException \Exception
        *@expectedExceptionMessage O 2 argumento tem que ser numeral
        */
        public function testErroSeSaoNumeral2(){

            $soma = new Soma();
            $soma->setNum2('marco');

        }

         /**
        * @expectedException \Exception
        *@expectedExceptionMessage O parametro 1 nao pode ser negativo
        */
        public function testErroNumeroNegativoParametro1(){
         
            $soma = new Soma();
            $soma->setNum1(-3);
        }

        /**
        * @expectedException \Exception
        *@expectedExceptionMessage O parametro 2 nao pode ser negativo
        */
        public function testErroNumeroNegativoParametro2(){

            $soma = new Soma();
            $soma->setNum2(-2);
        }

    }



?>