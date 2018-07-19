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
        return $this->belongsToMany('App\Cliente')->withTimestamps();
    }

    public function vendedors(){
        return $this->belongsToMany('App\Vendedor', 'vendedor_id');
    }
}
