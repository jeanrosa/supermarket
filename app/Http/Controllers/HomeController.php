<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Http\Requests;
use App\Subcategorias;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias=Categorias::all();


        /*dd($request->session()->get('laravel_session'));*/
        return view('home')->with('categorias',$categorias);


    }

    public function categorias()
    {
        $categorias=Categorias::all();
        return view('layouts.app')->with('categorias',$categorias);
    }

    public function search(Request $request)
    {
        $buscar=trim($request->input('buscar'));
        $busqueda=Subcategorias::
                    /*join('productos','subcategorias.id_subcategoria','=','productos.id_subcategoria')
                    ->select('productos.*')*/
                    where('descripcion_subcategoria','LIKE','%'.$buscar.'%')
                    ->get();


        return view('lista')->with('subcategorias',$busqueda);

    }
}
