<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentarios extends Model
{
    /*use SoftDeletes;*/

    public $timestamps=false;
    protected $table='comentarios';
    protected $primaryKey='id_comentario';
    /*protected $dates=['deleted_at'];*/
    
    public function usuarios()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }

}
