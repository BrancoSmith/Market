<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;

    Class SubtracaoTest extends TestCase{

        public function assertPreConditions(){
            return class_exists('CodeExperts\Aritmetico\Subtracao');

        }
    }


?>