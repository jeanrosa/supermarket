<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Subcategorias;
use Illuminate\Http\Request;
use App\Http\Requests\SubcategoriasForm;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class SubcategoriasController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');*/
        $this->categoria=$categorias=Categorias::all()->pluck('descripcion_categoria','id_categoria');
    }


    public function index($id)
    {
        $subcategorias=Subcategorias::where('id_categoria','=',$id)->get();
        /*dd($subcategorias);*/
        return view('subcategorias.index')->with('subcategorias',$subcategorias);
    }

    public function all()
    {
        $subcategorias=Subcategorias::paginate(5);
        $subcategorias->setPath('subcategoria');
        return view('subcategorias.listar')->with('subcategorias',$subcategorias);
    }

    public function create()
    {
        return view('subcategorias.crear')->with(['categorias'=>$this->categoria]);
    }


    public function store(SubcategoriasForm $subcategoriasForm)
    {

        $subcategoria=new Subcategorias();
        $foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path() .'/subcategorias/';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $subcategoria->url =$url_foto;
        }
        $subcategoria->id_categoria=filter_var(\Request::Input('categoria'),FILTER_SANITIZE_NUMBER_INT);
        $subcategoria->descripcion_subcategoria=filter_var(\Request::Input('subcategoria'),FILTER_SANITIZE_STRING);
        $subcategoria->save();
        return redirect('subcategoria')->with('mensaje','Se ha creado una nueva Subcategoria');
    }

    public function edit($id)
    {
        $subcategoria=Subcategorias::find($id);
        return view('subcategorias.editar')->with(['subcategoria'=>$subcategoria,
                                                    'categorias'=>$this->categoria]);
    }

    public function update($id,SubcategoriasForm $subcategoriasForm)
    {
        $subcategoria=Subcategorias::find($id);
        $foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path() .'/subcategorias/';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $subcategoria->url =$url_foto;
        }
        $subcategoria->id_categoria=filter_var(\Request::Input('categoria'),FILTER_SANITIZE_NUMBER_INT);
        $subcategoria->descripcion_subcategoria=filter_var(\Request::Input('subcategoria'),FILTER_SANITIZE_STRING);
        $subcategoria->save();
        return redirect('subcategoria')->with('mensaje','Se ha actualizado la Subcategoria'.$id);
    }

    public function destroy($id)
    {
        $subcategoria=Subcategorias::find($id);
        $subcategoria->delete();
        return redirect('subcategoria')->with('mensaje','Se ha eliminado el articulo'.$id);
    }
}
