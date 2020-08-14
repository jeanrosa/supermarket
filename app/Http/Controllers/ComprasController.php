<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Tipo_Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Compras;
use App\Http\Requests\PagoForm;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
class ComprasController extends Controller
{   
    
    public function __construct()
    {
        $this->tipo_pago=Tipo_Pago::all()->pluck('tipo_pago','id_tipo_pago');
    }

    public function confirmar()
    {
        $compras=Compras::paginate(10);
        $compras->setPath('compras/'.Auth::user()->id);
        return view('compra.confirmar')->with('compras',$compras);
    }

    public function destroy($id)
    {
        $compras=Compras::find($id);
        $compras->delete();
        return redirect('confirmar_compra/'.$id)->with('mensaje','Se ha eliminado su compra N°'.$id);
    }


    public function getData($id)
    {
        return view('compra.pago')->with(['tipo_pago'=>$this->tipo_pago,'id'=>$id]);
    }

    public function pagar(Request $request,PagoForm $pagoForm,$id)
    {
        $compras=Compras::find($id);
        $compras->id_tipo_pago=\Request::Input('tipo_pago');
        $compras->save();

        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();


        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
        Mail::send('emails.pago', $data, function($message) use ($request)
        {
            //remitente
            $message->from(env('MAIL_USERNAME'));

            //receptor
            $message->to('pedidos@supermarkonline.com','SupermarkOnline');

            //asunto
            $message->subject('Compra Realizada');
        });
        return redirect('/home')->with('mensaje','La compra fue efectuada, estaremos en contacto con ud');

    }

}