<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ContactoController extends Controller
{
    public function index()
    {
        $usuario=User::where('id','=',Auth::user()->id)->get();
        return view('contacto.index')->with('usuarios',$usuario);
    }

    public function enviar(Request $request)
    {
        $data = $request->all();
        \Mail::send('emails.contacto', $data, function($message) use ($request)
        {
            $message->from(env('MAIL_USERNAME'));
            $message->to('martingomes36@gmail.com','Martincillo');
            $message->subject('Contacto');
        });
        return redirect('/home');
    }

    public function ind()
    {
        return view('informacion.condiciones');
    }

    public function trayectoria()
    {
        return view('informacion.trayectoria');
    }
}
