<?php

namespace Tests\Feature\ClienteRouteTest;

use App\Cliente;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PharIo\Manifest\Type;


class  ClienteRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
     public function testRouteIndexClienteOk()
     {
         $this->call('GET', 'cliente');
         $this->assertResponseOk();
     }
     
     public function testRouteCreateClienteOk()
     {
         $this->call('GET', 'cliente/create');
         $this->assertResponseOk();
     }

     public function testRouteShowClienteOk()
     {
         $this->call('GET', 'cliente/1');
         $this->assertResponseOk();
     }

     public function testRouteEditClienteOk()
     {
         $this->call('GET', 'cliente/1/edit');
         $this->assertResponseOk();
     }
    
    



}
