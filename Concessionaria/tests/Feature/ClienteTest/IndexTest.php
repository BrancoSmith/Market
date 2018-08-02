<?php

namespace Tests\Feature\ClienteTest;

use App\Cliente;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PharIo\Manifest\Type;
use Illuminate\Support\Facades\Route;


class  IndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
     public function testSeContemOObjetoCliente()
     {
        
          $this->action('GET', 'ClienteController@index');
          $this->assertViewHas('cliente');
          
     }
     
    

}
