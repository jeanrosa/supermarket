<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;

class EstadisticasController extends Controller
{
    public function prueba()
    {
        return view('estadisticas.prueba');
    }

    public function encripcion()
    {
        $hola=Crypt::encrypt('hola');
        dd($hola);
    }
}
