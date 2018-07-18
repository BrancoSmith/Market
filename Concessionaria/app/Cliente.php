<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'cpf', 'telefone'];

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
