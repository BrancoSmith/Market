<?php

namespace Tests\Feature\VendedorTest;

use App\Vendedor;
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

   public function testCadastroVendedor()
    {
        $this->visit('vendedor/create')
            ->type('silv', 'nome')
            ->type('12345678913', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar');
    }

    public function testNomeComMenosDeDoisCaracteres()
    {
        $this->visit('vendedor/create')
            ->type('h', 'nome')
            ->type('12345678913', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('vendedors', ['nome' => 'h']);
    }

    public function testNomeNaoNumeros()
    {
        $this->visit('vendedor/create')
            ->type('1232', 'nome')
            ->type('12548785698', 'cpf')
            ->type('156', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDatabase('vendedors', ['nome' => '1232']);
    }

    public function testCpfVendedorComMenosDeOnzeCaracteres()
    {
        $this->visit('vendedor/create')
            ->type('marcio', 'nome')
            ->type('9856325698', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('vendedors', ['cpf' => '9856325698']);
    }

    public function testCpfVendedorComMaisDeOnzeCaracteres()
    {
        $this->visit('vendedor/create')
            ->type('marcio', 'nome')
            ->type('985632569813', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('vendedors', ['cpf' => '985632569813']);
    }
    public function testCpfVendedorRepetido(){
        $this->visit('vendedor/create')
            ->type('marcio', 'nome')
            ->type('12589789545', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar');
            //dd(vendedor::all()->pluck('cpf'));
        $this->visit('vendedor/create')
            ->type('marcircl', 'nome')
            ->type('12589789545', 'cpf')
            ->type('12333', 'telefone')
            ->press('Cadastrar');
            
            $this->assertEquals(1, vendedor::all()->where('cpf', '12589789545')->count());
    }

    public function testCpfVendedorNull()
    {
        $this->visit('vendedor/create')
            ->type('marcl', 'nome')
            ->type(null, 'cpf')
            ->type('01254', 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('vendedors', ['cpf' => null]);
    }

   
    public function testTelefoneNull()
    {
        $this->visit('vendedor/create')
            ->type('marcl', 'nome')
            ->type('78965487996', 'cpf')
            ->type(null, 'telefone')
            ->press('Cadastrar')
            ->notSeeInDataBase('vendedors', ['telefone' => null]);
    }


}
?>