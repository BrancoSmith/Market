<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;

    Class SubtracaoTest extends TestCase{

        public function assertPreConditions(){

            $this->assertTrue(
                 class_exists('CodeExperts\Aritmetico\Subtracao')
            );        
        }

        public function testSubtracaoDeDoisNumeros(){

            $soma = new Subtracao();
            $soma->setNum1(15);
            $soma->setNum2(10);

            $this->assertEquals(5, $soma->subtrair());

            $soma = new Subtracao();
            $soma->setNum1(50);
            $soma->setNum2(20);

            $this->assertEquals(30, $soma->subtrair());


        }

        /**
        * @expectedException \InvalidArgumentException
        *@expectedExceptionMessage Parametro nao informado
        */
        public function testValidaSeValoresNaoForemPassados(){

            $soma = new Subtracao();
            $soma->setNum1(15);
            $soma->setNum2();


        }   
    }


?>