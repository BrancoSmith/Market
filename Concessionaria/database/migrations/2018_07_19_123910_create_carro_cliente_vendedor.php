<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarroClienteVendedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
                  
            $table->integer('carro_id')->unsigned()->index();
            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade');
            
            $table->integer('cliente_id')->unsigned()->index();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

            $table->integer('vendedor_id')->unsigned()->index();
            $table->foreign('vendedor_id')->references('id')->on('vendedors')->onDelete('cascade');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
}
