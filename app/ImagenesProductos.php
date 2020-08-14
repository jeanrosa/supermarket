<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenesProductos extends Model
{
    public $timestamps=false;
    protected $table='imagenes_productos';
    protected $primaryKey='id_img_prod';

    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_producto');
    }
}
