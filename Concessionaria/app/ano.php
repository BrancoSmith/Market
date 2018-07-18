<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable = ['ano'];

    public function carros(){
        return $this->belongsToMany('App\Carro')->withTimestamps();
    }
}
