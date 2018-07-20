<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    
        protected $fillable = ['carro_id', 'cliente_id', 'vendedor_id'];
    
        public function cliente(){
            return $this->hasOne('App\Cliente', 'id', 'cliente_id');
        }
       
        public function carro(){
            return $this->hasOne('App\Carro' , 'id', 'carro_id');
        }
    
        public function vendedor(){
            return $this->hasOne('App\Vendedor', 'id', 'vendedor_id');
        }
}
