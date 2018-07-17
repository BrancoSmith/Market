<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['nome', 'ano', 'preco', 'kmrodado'];

    public function ano(){
        return $this->belongsToMany('App\Ano')->withTimestamps();
    }
}
