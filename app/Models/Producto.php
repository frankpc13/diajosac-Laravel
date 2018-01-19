<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table="producto";

    public $timestamps=false;

    public function marca(){
        //si no se especifica el foreign key no deja agarralos los valores relacionados que tiene con el producto
        return $this->belongsTo(Marca::class,'Marca_id');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class,'Tipo_id');
    }
}
