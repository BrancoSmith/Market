<?php

use Illuminate\Database\Seeder;
use App\Cliente;
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'marco aurelio',
            'cpf' => '12365489562',
            'telefone' => '123',
        ]);
    }
}
