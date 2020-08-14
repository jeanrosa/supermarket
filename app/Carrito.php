<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $timestamps=false;
    protected $table='carrito';
    protected $primaryKey='id_carrito';
}
