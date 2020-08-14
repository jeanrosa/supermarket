<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use Authenticatable;

    public $timestamps=false;
    protected $table='proveedores';
    protected $primaryKey='id_proveedor';
}
