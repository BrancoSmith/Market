<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnoCarroPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ano_carro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ano_id')->unsigned()->index();
            $table->foreign('ano_id')->references('id')->on('anos')->onDelete('cascade');

            $table->integer('carro_id')->unsigned()->index();
            $table->foreign('carro_id')->references('id')->on('carros')->onDelete('cascade');

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
        Schema::dropIfExists('ano_carro');
    }
}
