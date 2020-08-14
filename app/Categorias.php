<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public $timestamps=false;
    protected $table='categorias';
    protected $primaryKey='id_categoria';

    public function subcategorias()
    {
        return $this->hasMany(Subcategorias::class,'id_categoria');
    }
    
}
