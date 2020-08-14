<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    public $timestamps=false;
    protected $table='subcategorias';
    protected $primaryKey='id_subcategoria';
    
    public function categorias()
    {
        return $this->belongsTo(Categorias::class,'id_categoria');
    }
}
