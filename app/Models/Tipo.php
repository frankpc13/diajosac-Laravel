<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //
    protected $table="tipo";
    public $timestamps=false;

    public function producto(){
        return $this->hasMany('App\Models\Producto');
    }
}
