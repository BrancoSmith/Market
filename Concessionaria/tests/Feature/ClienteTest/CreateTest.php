<?php

namespace Tests\Feature\ClienteTest;

use App\Cliente;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PharIo\Manifest\Type;


class  CreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   use DatabaseTransactions;

    public function testCadastroCliente()
    {
        $this->visit('cliente/create')
            ->type('silv', 'nome')
            ->type('12345678913', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar');
    }

    public function testNomeComMenosDeDoisCaracteres()
    {
        $this->visit('cliente/create')
            ->type('h', 'nome')
            ->type('12345678913', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('clientes', ['nome' => 'h']);
    }

    public function testNomeNaoNumeros()
    {
        $this->visit('cliente/create')
            ->type('1232', 'nome')
            ->type('12548785698', 'cpf')
            ->type('156', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDatabase('clientes', ['nome' => '1232']);
    }

    public function testCpfClienteComMenosDeOnzeCaracteres()
    {
        $this->visit('cliente/create')
            ->type('marcio', 'nome')
            ->type('9856325698', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('clientes', ['cpf' => '9856325698']);
    }

    public function testCpfClienteComMaisDeOnzeCaracteres()
    {
        $this->visit('cliente/create')
            ->type('marcio', 'nome')
            ->type('985632569813', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('clientes', ['cpf' => '985632569813']);
    }
    public function testCpfClienteRepetido(){
        $this->visit('cliente/create')
            ->type('marcio', 'nome')
            ->type('12589789545', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar');
            //dd(Cliente::all()->pluck('cpf'));
        $this->visit('cliente/create')
            ->type('marcircl', 'nome')
            ->type('12589789545', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar');
            
            $this->assertEquals(1, Cliente::all()->where('cpf', '12589789545')->count());
    }

    public function testCpfClienteNull()
    {
        $this->visit('cliente/create')
            ->type('marcl', 'nome')
            ->type(null, 'cpf')
            ->type('01254', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('clientes', ['cpf' => null]);
    }

   
    public function testTelefoneNull()
    {
        $this->visit('cliente/create')
            ->type('marcl', 'nome')
            ->type('78965487996', 'cpf')
            ->type(null, 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('clientes', ['telefone' => null]);
    }
    
   
}
?>