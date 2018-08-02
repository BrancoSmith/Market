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


class  ShowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     use DatabaseTransactions;

    public function testSeContemOObjetoCliente()
    {
        $cliente = Cliente::create(['nome' => 'marli', 'cpf' => '10236548569', 'telefone' => '12356']);
        $this->action('GET',  'ClienteController@show', $cliente->id);
        $this->assertResponseOk();
        $this->assertViewHas('cliente');
    }

    public function testMostrarDadosCliente()
    {
        $cliente = Cliente::create(['nome' => 'marli', 'cpf' => '10236548569', 'telefone' => '12356']);
        $this->action('GET',  'ClienteController@show', $cliente->id);

        $this->assertResponseOk();
        $this->assertViewHas('cliente');
        $this->assertClassHasAttribute('clientes',['nome' => 'marli']);
       
        //dd( $this->ObjectHasAttribute('marli'));
    }
}
