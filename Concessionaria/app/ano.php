<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable = [ 'ano'];

    public function ano(){
        return $this->belongsToMany('App\Carro')->withTimestamps();
    }
}
