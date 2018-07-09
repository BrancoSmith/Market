<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class market extends Model
{
    public function up() {
    Schema::create('mark', function(Blueprint $table) {
        $table->string('name')->unique();
        $table->string('city');
        $table->string('website');
        $table->string('weblocal');
        $table->timestamps();



    });

} }
