<?php

namespace App\Http\Controllers;

use App\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\ComentariosForm;

class ComentariosController extends Controller
{
    
    
    public function index()
    {
        $comentarios=Comentarios::with('usuarios')->paginate(15);
        $comentarios->setPath('comentarios');
        return view('comentarios.index')->with(['comentarios'=>$comentarios]);
    }

    public function store(ComentariosForm $comentariosForm)
    {
        $comentarios=new Comentarios();
        $comentarios->id_usuario=\Auth::user()->id;
        $comentarios->comentario=filter_var(\Request::Input('mensaje'),FILTER_SANITIZE_STRING);
        $comentarios->save();

        return redirect('comentarios')->with('mensaje','Se ha publicado su comentario');
    }

    public function edit($id)
    {
        $comentario=Comentarios::find($id);
        return view('comentarios.editar')->with('comentario',$comentario);

    }

    public function update($id)
    {
        $comentarios=Comentarios::find($id);
        $comentarios->id_usuario=\Auth::user()->id;
        $comentarios->comentario=filter_var(\Request::Input('mensaje'),FILTER_SANITIZE_STRING);
        $comentarios->save();

        return redirect('comentarios')->with('mensaje','Se ha actualizado su comentario');
    }

    public function destroy($id)
    {
        $comentarios=Comentarios::find($id);
        $comentarios->delete();
        return redirect('comentarios')->with('mensaje','Ud borro su comentario');
    }
}
