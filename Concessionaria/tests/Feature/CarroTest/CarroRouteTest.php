<?php

namespace Tests\Feature\CarroTest;

use App\Carro;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PharIo\Manifest\Type;


class  CarroRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
     public function testRouteIndexCarroOk()
     {
         $this->call('GET', 'carro');
         $this->assertResponseOk();
     }
     
     public function testRouteCreateCarroOk()
     {
         $this->call('GET', 'carro/create');
         $this->assertResponseOk();
     }

     public function testRouteShowCarroOk()
     {
         $this->call('GET', 'carro/1');
         $this->assertResponseOk();
     }

     public function testRouteEditCarroOk()
     {
         $this->call('GET', 'carro/1/edit');
         $this->assertResponseOk();
     }
    
    



}
