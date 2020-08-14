<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    public $timestamps=false;
    protected $table='parroquias';
    protected $primaryKey='id_parroquia';

    public function municipios()
    {
        return $this->belongsTo(Municipio::class,'id_municipio');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class,'id_parroquia');
    }
}
