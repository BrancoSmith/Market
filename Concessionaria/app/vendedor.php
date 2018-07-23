<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = ['nome', 'cpf', 'telefone'];


    public function carros(){
        return $this->belongsToMany( 'App\Carro', 'carro_id');
    }

    public function clientes(){
        return $this->belongsToMany('App\Cliente')->withTimestamps();
        }

    public function vendas(){
        return $this->hasOne('App\Venda', 'vendedor_id', 'id');
    }
}