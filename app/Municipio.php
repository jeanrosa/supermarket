<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public $timestamps=false;
    protected $table='municipios';
    protected $primaryKey='id_municipio';

    public function estados()
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }

    public function parroquias()
    {
        return $this->hasMany(Parroquia::class,'id_municipio');
    }
}
