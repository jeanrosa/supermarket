<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 02-07-2016
 * Time: 09:04 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
class Tipo_Pago extends Model
{
    public $timestamps=false;
    protected $table='tipo_pago';
    protected $primaryKey='id_tipo_pago';

}