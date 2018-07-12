<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendedor extends Model
{
    protected $fillable = ['nome', 'cpf', 'telefone'];
}
