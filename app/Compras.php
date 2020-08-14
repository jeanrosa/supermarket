<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    public $timestamps=false;
    protected $table='compra';
    protected $primaryKey='id_compra';
}
