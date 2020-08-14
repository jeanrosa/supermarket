<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    public $timestamps=false;
    protected $table='unidad_medida';
    protected $primaryKey='id_unidad';
}
