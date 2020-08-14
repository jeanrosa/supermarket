<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class VentasController extends Controller
{
    public function pdf()
    {
        $usuarios=User::all();
        $pdf = \PDF::loadView('ventas.factura', $usuarios);
        return $pdf->stream();
    }
}
