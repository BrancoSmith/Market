<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable = ['ano'];

    public function carros(){
        return $this->belongsToMany('App\Carro')->withTimestamps();
    }

    public function carros(){
        return $this->belongsToMany( 'App\Carro', 'carro_id');
    }

    public function clientes(){
        return $this->belongsToMany('App\Cliente', 'cliente_id');
    }

    public function vendedors(){
        return $this->belongsToMany('App\Vendedor', 'vendedor_id');
    }
}
