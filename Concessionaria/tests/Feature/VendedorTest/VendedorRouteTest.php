<?php

namespace Tests\Feature\VendedorRouteTest;

use App\Vendedor;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PharIo\Manifest\Type;


class  VendedorRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
     public function testRouteIndexVendedorOk()
     {
         $this->call('GET', 'vendedor');
         $this->assertResponseOk();
     }
     
     public function testRouteCreateVendedorOk()
     {
         $this->call('GET', 'vendedor/create');
         $this->assertResponseOk();
     }

     public function testRouteShowVendedorOk()
     {
         $this->call('GET', 'vendedor/1');
         $this->assertResponseOk();
     }

     public function testRouteEditVendedorOk()
     {
         $this->call('GET', 'vendedor/1/edit');
         $this->assertResponseOk();
     }
    
    



}
