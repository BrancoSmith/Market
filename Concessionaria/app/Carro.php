<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['nome', 'ano', 'preco', 'kmrodado'];

    public function anos(){
        return $this->belongsToMany('App\Ano')->withTimestamps();
    }
    public function carros(){
        return $this->belongsToMany('App\Carro')->withTimestamps();
    }

    public function clientes(){
        return $this->hasOne('App\Cliente')->withTimestamps();
    }

    public function vendedors(){
        return $this->hasOne('App\Vendedor', 'vendedor_id');
    }

    public function vendas(){
        return $this->hasOne('App\Venda', 'carro_id', 'id');
    }
}
