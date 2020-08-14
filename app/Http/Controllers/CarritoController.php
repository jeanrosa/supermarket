<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Compras;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CarritoForm;
class CarritoController extends Controller
{
    public function index()
    {
        $carrito=DB::table('carrito_producto')
                    ->join('productos','productos.id_producto','=','carrito_producto.id_producto')
					->select('carrito_producto.*','productos.producto','productos.precio')
					->where('id_usuario','=',Auth::user()->id)
					->paginate(10);
        $carrito->setPath('carrito');
        return view('carrito.index')->with('carrito',$carrito);
    }

    public function store(Request $request,CarritoForm $carritoForm)
    {
        $carrito=new Carrito();
        $carrito->id_carrito=\Auth::user()->id;
        $carrito->save();

        DB::table('carrito_producto')
            ->insert(['id_carrito'=>\Auth::user()->id,
                     'id_producto'=>\Request::Input('id'),
                     'cantidad'=>\Request::Input('cantidad'),
                     'id_usuario'=>\Auth::user()->id]);

        return redirect('carrito')->with('mensaje','Ud ha agregado un nuevo producto a su compra');
    }

    public function presupuesto($id)
    {
        $carrito=DB::table('carrito_producto')
                    ->join('productos','productos.id_producto','=','carrito_producto.id_producto')
					->select('carrito_producto.*','productos.producto','productos.precio')
					->where('id_usuario','=',Auth::user()->id)
					->get();

        $usuario=DB::select('SELECT users.*, parroquias.descripcion_parroquia, municipios.descripcion_municipio, estados.descripcion
                            FROM users
                            INNER JOIN 
                            (parroquias INNER JOIN (municipios INNER JOIN estados ON municipios.id_estado = estados.id_estado) ON parroquias.id_municipio = municipios.id_municipio) ON users.id_parroquia = parroquias.id_parroquia
                            where users.id ='.$id);
        
        $view =  \View::make('carrito.presupuesto')->with(['presupuesto'=>$carrito,'usuario'=>$usuario])->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Presupuesto');
    }
	
	public function compra()
	{
		$compra=new Compras();
		$compra->id_carrito=Auth::user()->id;
		$compra->id_usuario=Auth::user()->id;
		$compra->total=\Request::Input('total');
		$compra->save();
		return redirect('/home')->with('mensaje','Su compra esta en revisión, si desea concretarla, dirijase a confirmar compra');
	}
	
	public function compras()
	{
		$compras=Compras::paginate(10);
		$compras->setPath('compras/'.Auth::user()->id);
		return view('compra.confirmar')->with('compras',$compras);
	}


    public function destroy($id)
    {
        /*$carrito=Carrito::find($id);
        $carrito->delete();*/
        DB::table('carrito_producto')->where('id_carrito_producto', '=', $id)->delete();

        return redirect('carrito')->with('mensaje','¡Has Eliminado un elemento del carrito!');
    }

}
