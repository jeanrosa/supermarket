<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps=false;
    protected $table='productos';
    protected $primaryKey='id_producto';

    public function imagenes()
    {
        return $this->hasMany(ImagenesProductos::class,'id_producto');
    }
}
