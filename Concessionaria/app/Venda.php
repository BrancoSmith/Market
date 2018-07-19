<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    
        protected $fillable = ['carro_id', 'cliente_id', 'vendedor_id'];
    
        public function carros(){
            return $this->belongsToMany('App\Carro', 'carro_id');
        }
    
        public function clientes(){
            return $this->belongsToMany('App\Cliente')->withTimestamps();
        }
    
        public function vendedors(){
            return $this->belongsToMany('App\Vendedor', 'vendedor_id');
        }
}
