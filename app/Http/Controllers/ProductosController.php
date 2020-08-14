<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\ImagenesProductos;
use App\Producto;
use App\Subcategorias;
use App\UnidadMedida;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductosForm;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class ProductosController extends Controller
{
    protected $categoria;

    public function __construct()
    {
        /*$this->middleware('auth');*/
        $this->subcategoria=$subcategorias=Subcategorias::all()->pluck('descripcion_subcategoria','id_subcategoria');
        $this->unidad=$unidades=UnidadMedida::all()->pluck('descripcion_unidad','id_unidad');
    }

    public function index(Request $request)
    {
        $buscar=$request->input('buscar');
        $productos=Producto::where('descripcion_producto','LIKE',$buscar)->paginate(5);
        $productos->setPath('producto');
        return view('productos.listar')->with('productos',$productos);
    }

    public function listar($id)
    {
        $productos=Producto::where('id_subcategoria','=',$id)->get();
        return view('productos.index')->with('productos',$productos);
    }

    public function create()
    {
        return view('productos.crear')->with(['subcategoria'=>$this->subcategoria,'unidad'=>$this->unidad]);
    }

    public function store(ProductosForm $productosForm)
    {
        $productos=new Producto();
        $productos->id_subcategoria=\Request::Input('subcategoria');
        $productos->producto=\Request::Input('producto');
        $productos->descripcion_producto=\Request::Input('descripcion');
        $productos->precio=\Request::Input('precio');
        $productos->id_unidad=\Request::Input('unidad');
        $productos->save();

        $fotos=Input::file('fotos');
        $maximo=DB::select("SELECT MAX(id_producto) as id FROM productos");
        foreach($fotos as $foto){
            if($foto != null)
            {
                $ruta = public_path().'/productos_imagenes/';
                $url_foto = $foto->getClientOriginalName();
                $subir = $foto->move($ruta, $foto->getClientOriginalName());

                DB::table('imagenes_productos')->insert(
                    ['id_producto'=>$maximo[0]->id,
                        'url'=>$url_foto
                    ]
                );
            }
        }

         return redirect('producto')->with('message','Se ha registrado un nuevo producto');
     }

     /*public function show($id)
     {
         $productos=Producto::where('id_producto','=',$id)->get();
         return view('productos.detalle')->with(['productos'=>$productos,
                                                 'id'=>$id]);
     }*/

    public function edit($id)
    {
        $productos=Producto::find($id);
        return view('productos.editar')->with(['productos'=>$productos,'unidad'=>$this->unidad,'subcategoria'=>$this->subcategoria]);
    }

    public function update($id,ProductosForm $productosForm)
    {
        $productos=Producto::find($id);
        $productos->id_subcategoria=\Request::Input('subcategoria');
        $productos->producto=\Request::Input('producto');
        $productos->descripcion_producto=\Request::Input('descripcion');
        $productos->precio=\Request::Input('precio');
        $productos->id_unidad=\Request::Input('unidad');
        $productos->save();

        $fotos=Input::file('fotos');
        $maximo=DB::select("SELECT (id_producto) as id FROM productos where id_producto=".$id);
        foreach($fotos as $foto){
            if($foto != null)
            {
                $ruta = public_path().'/productos_imagenes/';
                $url_foto = $foto->getClientOriginalName();
                $subir = $foto->move($ruta, $foto->getClientOriginalName());


                DB::table('imagenes_productos')->insert(
                    ['id_producto'=>$id,
                        'url'=>$url_foto
                    ]
                );
            }
        }

        return redirect('producto')->with('message','Se ha actualizado el producto N°'.$id);
    }

    public function destroy($id)
    {
        $productos=Producto::find($id);
        $productos->delete();
        return redirect('producto')->with('message','Se ha eliminado el producto N°'.$id);
    }

    public function details($id)
    {
        $productos=Producto::with('imagenes')
                    ->where('id_producto','=',$id)->get();
        return view('productos.detalle')->with(['productos'=>$productos,
                                                'id'=>$id]);
    }
}
