<?php

use Illuminate\Database\Seeder;
use App\Carro;
class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carro::create([
            'nome' => 'porche',
            'ano' => '1998',
            'preco' => '19988',
            'kmrodado' => '12354',
        ]);
    }
}
