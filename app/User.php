<?php

namespace App;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes,CanResetPassword;

    /**
     * Soft Deletes For The table
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * Table to be used
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Primary Key From Users Table
     * @var string
     */
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    public function parroquia()
    {
        return $this->hasOne(\App\Parroquia::class, 'id_parroquia');
    }

    public function tipo_usuario()
    {
        return $this->belongsTo(\App\Tipo_usuario::class, 'id_tipo_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentarios::class,'id_comentario');
    }
}
