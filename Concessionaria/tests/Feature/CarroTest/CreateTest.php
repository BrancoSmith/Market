<?php

namespace Tests\Feature\CarroTest;

use App\Carro;
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

   public function testCadastroCarro()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type('1998', 'ano')
            ->type('12333', 'kmrodado')
            ->type('8555', 'preco')
            ->press('Cadastrar');
    }
    public function testAnoNaoNull()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type(null, 'ano')
            ->type('12333', 'kmrodado')
            ->type('8555', 'preco')
            ->press('Cadastrar');
            $this->notSeeInDataBase('carros', ['ano' => null]);
    }

    public function testAnoApenasNumerico()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type('aaaaa', 'ano')
            ->type('12333', 'kmrodado')
            ->type('8555', 'preco')
            ->press('Cadastrar');
            $this->notSeeInDataBase('carros', ['ano' => 'aaaaa']);
    }

    public function testKmRodadoNaoNull()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type('1998', 'ano')
            ->type(null, 'kmrodado')
            ->type('8555', 'preco')
            ->press('Cadastrar');
            $this->notSeeInDataBase('carros', ['kmrodado' => null]);
    }

    public function testKmRodadoApenasNumerico()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type('1998', 'ano')
            ->type('aaaa', 'kmrodado')
            ->type('8555', 'preco')
            ->press('Cadastrar');
            $this->notSeeInDataBase('carros', ['kmrodado' => 'aaaa']);
    }

    public function testPrecoNaoNull()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type('1998', 'ano')
            ->type('1998', 'kmrodado')
            ->type(null, 'preco')
            ->press('Cadastrar');
            $this->notSeeInDataBase('carros', ['preco' => null]);
    }

    public function testPrecoApenasNumerico()
    {
        $this->visit('carro/create')
            ->type('camaro', 'nome')
            ->type('1998', 'ano')
            ->type('1998', 'kmrodado')
            ->type('aaaa', 'preco')
            ->press('Cadastrar');
            $this->notSeeInDataBase('carros', ['preco' => 'aaaa']);
    }

    
    

}

?>
