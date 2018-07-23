<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'cpf', 'telefone'];

    public function carros(){
        return $this->belongsToMany('App\Carro', 'carro_id');
    }

    public function cliente(){
        return $this->hasOne('App\Cliente', 'id', 'cliente_id')->withTimestamps();
    }

    public function vendedor(){
        return $this->hasOne('App\Vendedor', 'id', 'vendedor_id');
    }
    public function vendas(){
        return $this->hasOne('App\Venda', 'cliente_id', 'id');
    }
}
