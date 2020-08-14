<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Estado;
use App\Municipio;
use App\Proveedor;
use App\UnidadMedida;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorForm;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProveedorController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');*/
        $this->categoria=$categorias=Categorias::all()->pluck('descripcion_categoria','id_categoria');
        $this->unidad=$unidad=UnidadMedida::all()->pluck('descripcion_unidad','id_unidad');
        $this->estado=$estado=Estado::all()->pluck('descripcion','id_estado');
        $this->municipio=$municipio=Municipio::all()->pluck('descripcion_municipio','id_municipio');
    }


    public function index()
    {
        $proveedor=Proveedor::all()->paginate(5);
        $proveedor->setPath('proveedor');
        return view('proveedores.index')->with('proveedor',$proveedor);

    }

    public function create()
    {
        return view('proveedores.crear')->with(['estado'=>$this->estado,
            /*'municipio'=>$this->municipio*/]);
    }

    public function store(Request $request,ProveedorForm $proveedorForm)
    {
        $proveedor=new  User();
        $foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path() . '/foto_usuario/';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $proveedor->foto=$url_foto;
        }
        $proveedor->nombre=filter_var(\Request::Input('nombre'),FILTER_SANITIZE_STRING);
        $proveedor->id_parroquia=filter_var(\Request::Input('parroquia'),FILTER_SANITIZE_NUMBER_INT);
        $proveedor->direccion=filter_var(\Request::Input('direccion'),FILTER_SANITIZE_STRING);
        $proveedor->telefono_movil=filter_var(\Request::Input('tlf_movil'),FILTER_SANITIZE_STRING);
        $proveedor->telefono_local=filter_var(\Request::Input('tlf_local'),FILTER_SANITIZE_STRING);
        $proveedor->razon_social=filter_var(\Request::Input('dedicacion'),FILTER_SANITIZE_STRING);
        $proveedor->pagina_web=filter_var(\Request::Input('pagina_web'),FILTER_SANITIZE_STRING);
        $proveedor->facebook=filter_var(\Request::Input('facebook'),FILTER_SANITIZE_STRING);
        $proveedor->twitter=filter_var(\Request::Input('twitter'),FILTER_SANITIZE_STRING);
        $proveedor->resena_empresa=filter_var(\Request::Input('reseña'),FILTER_SANITIZE_STRING);
        $proveedor->instagram=filter_var(\Request::Input('instagram'),FILTER_SANITIZE_STRING);
        $proveedor->password=\Hash::make(\Request::Input('contraseña'));
        $proveedor->identificacion=\Request::Input('rif'); //revision
        $proveedor->id_tipo_usuario=7;
        $proveedor->email=filter_var(\Request::Input('email'),FILTER_SANITIZE_EMAIL);
        $proveedor->save();

        $data=array(['email'=>$request->input('email'),
            'nombre'=>$request->input('nombre')]);

        event(new RegisteredUser($data));
        return redirect('/login')->with('mensaje','Se ha registrado como proveedor su solicitud');
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

    public function getOffer()
    {
        return view('proveedores.oferta')->with(['categoria'=>$this->categoria,
                                            'unidad'=>$this->unidad]);
    }

    public function setOffer()
    {
            
    }


}
