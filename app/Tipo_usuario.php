<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    public $timestamps=false;
    protected $table='tipo_usuario';
    protected $primaryKey='id_tipo_usuario';

    public function user()
    {
        return $this->hasMany(\App\User::class,'id_tipo_usuario');
    }

}
