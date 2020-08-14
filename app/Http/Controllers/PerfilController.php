<?php

namespace App\Http\Controllers;

use App\Factura;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index()
    {
        $usuario=User::where('id','=',Auth::user()->id)->get();
        return view('perfil.perfil')->with('usuario',$usuario);
    }
    
    public function carrito()
    {
        
    }
    
    public function getFacturas()
    {
        $facturas=Factura::where('id_usuario','=',Auth::user()->id)->paginate(5);
        $facturas->setPath('facturas');
        return view('perfil.facturas')->with('facturas',$facturas);
    }
    

    /*public function getCompras()
    {
        $compras=
    }*/
}
