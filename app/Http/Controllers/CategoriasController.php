<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoriasForm;
use Illuminate\Support\Facades\Input;
class CategoriasController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    public function index(Request $request)
    {
        $buscar=$request->input('buscar');
        $categorias=Categorias::where('descripcion_categoria','LIKE','%'.$buscar.'%')->paginate(5);
        $categorias->setPath('categoria');
        return view('categorias.index')->with('categorias',$categorias);
    }

    public function create()
    {
        return view('categorias.crear');
    }

    public function store(CategoriasForm $categoriasForm)
    {
        $categorias=new Categorias();
        $foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path().'/categorias/';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $categorias->url=$url_foto;
        }
        $categorias->descripcion_categoria=filter_var(\Request::Input('descripcion'),FILTER_SANITIZE_STRING);
        $categorias->save();
        return redirect('categoria')->with('mensaje','Se ha creado una nueva categoria');
    }

    public function edit($id)
    {
        $categorias=Categorias::find($id);
        return view('categorias.editar')->with('categorias',$categorias);

    }

    public function update($id,CategoriasForm $categoriasForm)
    {
        $categorias=Categorias::find($id);
        $foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path().'/categorias/';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $categorias->url=$url_foto;
        }
        $categorias->descripcion_categoria=filter_var(\Request::Input('descripcion'),FILTER_SANITIZE_STRING);
        $categorias->save();
        return redirect('categoria')->with('mensaje','Se ha actualizado la categoria N°'.$id);
    }

    public function destroy($id)
    {
        $categorias=Categorias::find($id);
        $categorias->delete();
        return redirect('categoria')->with('mensaje','Se Elimino la Categoria N°'.$id);
    }
}
