<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $timestamps=false;
    protected $table='estados';
    protected $primaryKey='id_estado';

    public function municipios()
    {
        return $this->hasMany(Municipio::class,'id_estado');
    }
}
