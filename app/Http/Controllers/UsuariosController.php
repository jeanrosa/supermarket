<?php

namespace App\Http\Controllers;

use App\Compras;
use App\Estado;
use App\Events\Event;
use App\Events\RegisteredUser;
use App\Municipio;
use App\Pais;
use App\Parroquia;
use App\Sexo;
use App\Tipo_usuario;
use App\Http\Controllers\EmailController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Barryvdh\DomPDF\PDF;
use App\Http\Requests\RegistroUsuarioForm;
use App\Http\Requests\FotoUsuarioForm;
use App\Http\Requests\TarjetaUsuarioForm;
class UsuariosController extends Controller
{
    public function __construct()
    {

        /*$this->middleware('auth');*/
        $this->tipo=$usuario=Tipo_usuario::all()->pluck('tipo_usuario','id_tipo_usuario');
        $this->estado=$estado=Estado::all()->pluck('descripcion','id_estado');
        $this->municipio=$municipio=Municipio::all()->pluck('descripcion_municipio','id_municipio');
        $this->sexo=Sexo::all()->pluck('sexo','id_sexo');
        $this->pais=Pais::all()->pluck('nombre','id');
        /*$this->tipo=$usuario=Tipo_usuario::all()->pluck('tipo_usuario','id_tipo_usuario');*/
    }

    public function listar(Request $request)
    {
        $buscar=$request->input('buscar');
        $usuarios=User::
            /*->join('tipo_usuario','users.id_tipo_usuario','=','tipo_usuario.id_tipo_usuario')*/
            /*->select('users.*','tipo_usuario.tipo_usuario')*/
            where('nombre','LIKE','%'.$buscar.'%')
            ->paginate(10);

        //$usuarios=User::with('tipo_usuario')->paginate(5);
        $usuarios->setPath('usuario');
        return view('usuarios.index')->with(['usuarios'=>$usuarios]);
    }

    public function crear()
    {
        return view('usuarios.crear')->with(['tipo_usuario'=>$this->tipo,'estado'=>$this->estado,
                                        'municipio'=>$this->municipio,
                                        'sexos'=>$this->sexo,
                                        'paises'=>$this->pais]);

    }

    public function guardar(Request $request,RegistroUsuarioForm $registroUsuarioForm)
    {
        $usuarios=new User();
        /*$foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path() . '/usuarios';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $usuarios->foto =$url_foto;
        }*/
        /*Session::put('user_id', Auth::user()->id_usuario);*/
        $usuarios->nombre=filter_var(\Request::Input('nombre'),FILTER_SANITIZE_STRING);
        $usuarios->id_parroquia=filter_var(\Request::Input('parroquia'),FILTER_SANITIZE_NUMBER_INT);
        $usuarios->direccion=filter_var(\Request::Input('direccion'),FILTER_SANITIZE_STRING);
        $usuarios->telefono_movil=filter_var(\Request::Input('tlf_movil'),FILTER_SANITIZE_STRING);
        $usuarios->telefono_local=filter_var(\Request::Input('tlf_local'),FILTER_SANITIZE_STRING);
        $usuarios->email=filter_var(\Request::Input('email'),FILTER_SANITIZE_EMAIL);
        $usuarios->fecha_nacimiento = date("Y-m-d", strtotime(\Request::Input('f_nacimiento')));
        $usuarios->id_sexo = \Request::Input('sexo');
        $usuarios->facebook=filter_var(\Request::Input('facebook'),FILTER_SANITIZE_STRING);
        $usuarios->twitter=filter_var(\Request::Input('twitter'),FILTER_SANITIZE_STRING);
        $usuarios->instagram=filter_var(\Request::Input('instagram'),FILTER_SANITIZE_STRING);
        $usuarios->password=\Hash::make(\Request::Input('contraseña'));
        $usuarios->identificacion=\Request::Input('cedula');
        /*$usuarios->foto=$url_foto;*/
        $usuarios->save();


        $data=array(['email'=>$request->input('email'),
                    'nombre'=>$request->input('nombre')]);

        event(new RegisteredUser($data));

        return redirect('/home')->with('mensaje','Se ha registrado exitosamente');
    }

    public function editar($id)
    {
        /*$encripcion=Crypt::decrypt($id);*/
        $usuarios=User::find($id);

        return view('usuarios.editar')->with(['usuarios'=>$usuarios,'tipo_usuario'=>$this->tipo]);
    }

    public function actualizar($id)
    {
        $usuarios=User::find($id);
        $usuarios->name=\Request::Input('nombre');
        $usuarios->email=\Request::Input('email');
        $usuarios->id_tipo_usuario=\Request::Input('tipo_usuario');
        $usuarios->password=\Hash::make(\Request::Input('contraseña'));
        $usuarios->save();

        return redirect('usuario')->with('mensaje','Se actualizo el registro Numero'.$id);
    }

    public function eliminar($id)
    {
        $usuarios=User::find($id);
        $usuarios->delete();
        return redirect('usuario')->with('mensaje','Se elimino el registro Numero '.$id);
    }

    public function profile()
    {
        return view('usuarios.perfil');
    }

    public function getUser($id)
    {
        $usuario=User::find($id);
        return view('usuarios.tarjeta')->with('usuario',$usuario);
    }

    public function setTarget($id,TarjetaUsuarioForm $tarjetaUsuarioForm)
    {
        $usuario=User::find($id);
        $usuario->tarjeta_cliente=filter_var(\Request::Input('tarjeta'),FILTER_SANITIZE_STRING);
        $usuario->save();
        return redirect('usuario')->with('mensaje','Se le ha colocado la tarjeta al usuario N°'.$id);
    }

    public function getPhoto($id)
    {
        $usuario=User::find($id);
        return view('usuarios.foto')->with('usuario',$usuario);
    }

    public function setPhoto($id,Request $request,FotoUsuarioForm $fotoUsuarioForm)
    {
        $usuario=User::find($id);
        $foto=Input::file('foto');
        if($foto != null)
        {
            $ruta = public_path() . '/foto_usuario/';
            $url_foto = $foto->getClientOriginalName();
            $subir = $foto->move($ruta, $foto->getClientOriginalName());
            $usuario->foto=$url_foto;
        }
        $usuario->save();

        return redirect('usuario')->with('mensaje','Se le ha colocado la Foto al usuario N°'.$id);
    }


    public function getCompras($id)
    {
        $compras=Compras::where('id_usuario','=',$id)->paginate(10);
        $compras->setPath('compras/'.$id);
        return view('usuarios.compras')->with('compras',$compras);
    }

    public function cargarFactura($id)
    {
        return view('usuarios.facturas')->with('id',$id);
    }

//    public function guardarFactura($id, Request $request)
//    {
//        $compra=Compras::find($id);
//        if ($request->hasFile('photo')) {
//
//        }
//        $compra->factura_fiscal
//
//    }
    
}
