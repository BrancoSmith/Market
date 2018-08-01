<?php

use Illuminate\Database\Seeder;
use App\Vendedor;

class VendedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedor::create([
            'nome' => 'marilio',
            'cpf' => '12365489562',
            'telefone' => '123',
        ]);
    }
}
