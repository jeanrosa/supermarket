<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/',function(){
    return view('layouts.app');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('tarjeta/{id}','UsuariosController@getUser');
    Route::post('usuarios/tarjeta/{id}','UsuariosController@setTarget');
    Route::get('foto/{id}','UsuariosController@getPhoto');
    Route::post('usuario/foto/{id}','UsuariosController@setPhoto');

    Route::get('crear_categoria','CategoriasController@create');
    Route::post('categoriaStore','CategoriasController@store');
    Route::get('categoria/editar/{id}','CategoriasController@edit');
    Route::post('categoria/{id}','CategoriasController@update');
    Route::delete('categoria/{id}','CategoriasController@destroy');

    //Comentarios
    Route::get('comentarios','ComentariosController@index');
    Route::post('crear_comentario','ComentariosController@store');
    Route::get('comentario/editar/{id}','ComentariosController@edit');
    Route::post('comentario/{id}','ComentariosController@update');
    Route::delete('eliminar/comentario/{id}','ComentariosController@destroy');

});

Route::get('usuario','UsuariosController@listar');
Route::get('crear_usuario','UsuariosController@crear');
Route::post('usuarios','UsuariosController@guardar');
Route::get('usuarios/editar/{id}','UsuariosController@editar');
Route::post('usuarios/{id}','UsuariosController@actualizar');



//para comprar
Route::post('comprar','CarritoController@compra');

Route::get('confirmar_compra/{id}','ComprasController@confirmar');
Route::delete('eliminar/compra/{id}','ComprasController@destroy');
Route::get('confirmar/{id}','ComprasController@getData');
Route::post('pagar/{id}','ComprasController@pagar');



Route::get('perfil','PerfilController@index');

//Categorias
Route::get('categoria','CategoriasController@index');


//Productos
Route::get('producto','ProductosController@index');
Route::get('crear_producto','ProductosController@create');
Route::post('productos','ProductosController@store');
Route::get('producto/editar/{id}','ProductosController@edit');
Route::post('producto/{id}','ProductosController@update');
Route::delete('producto/{id}','ProductosController@destroy');
Route::get('detalle/producto/{id}','ProductosController@details');
Route::get('productos/{id}','ProductosController@listar');

//Subcategorias
Route::get('subcategorias/{id}','SubcategoriasController@index');
Route::get('subcategoria','SubcategoriasController@all');
Route::get('subcategoria/editar/{id}','SubcategoriasController@edit');
Route::post('subcategoria/actualizar/{id}','SubcategoriasController@update');
Route::delete('subcategoria/eliminar/{id}','SubcategoriasController@destroy');
Route::get('crear_subcategoria','SubcategoriasController@create');
Route::post('subcategoriasStore','SubcategoriasController@store');

//Password Reset
/*Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');
Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset','Auth\PasswordController@reset');*/

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('usuario',['uses'=>'UsuariosController@listar','middleware'=>['auth']]);


Route::get('deposito',function(){
    return view('agd.index');
});

Route::get('cerdo',function(){
    return view('productos.index');
});


Route::delete('usuarios/eliminar/{id}','UsuariosController@eliminar');

Route::get('pdf','UsuariosController@pdf');

Route::get('prueba','SoapController@demo');

Route::get('recaptcha',function(){
   return view('recaptcha');
});

Route::get('estadisticas',function(){
   return view('estadisticas.index');
});

Route::get('estadisticas/prueba','EstadisticasController@prueba');
Route::get('estadisticas/encripcion','EstadisticasController@encripcion');





Route::get('contacto','ContactoController@index');
Route::post('enviar_correo','ContactoController@enviar');
Route::get('condiciones','ContactoController@ind');
Route::get('trayectoria','ContactoController@trayectoria');


Route::get('factura','VentasController@pdf');

Route::get('facturas','PerfilController@getFacturas');


Route::get('estados',function(\Illuminate\Http\Request $request) {
    $id = $request->input('option');
    $lost = \App\Estado::find($id)->municipios->pluck('descripcion_municipio','id_municipio');
    return $lost;
});

Route::get('municipios',function(\Illuminate\Http\Request $request) {
    $id = $request->input('option');
    $lost = \App\Municipio::find($id)->parroquias->pluck('descripcion_parroquia','id_parroquia');
    return $lost;
});

Route::get('categorias',function(\Illuminate\Http\Request $request){
    $id = $request->input('option');
    $lost = \App\Subcategorias::find($id)->categorias->pluck('descripcion_categoria','id_categoria');
    return $lost;
});


Route::get('subcategorias',function(\Illuminate\Http\Request $request){
    $id = $request->input('option');
    $lost = \App\Producto::find($id)->subcategorias->pluck('descripcion_subcategoria','id_subcategoria');
    return $lost;
});




//Proveedores
Route::get('proveedor','ProveedorController@index');
Route::get('crear_proveedor','ProveedorController@create');
Route::post('proveedores','ProveedorController@store');
Route::get('editar/proveedor/{id}','ProveedorController@edit');
Route::post('proveedor/{id}','ProveedorController@update');
Route::delete('proveedor/{id}','ProveedorController@destroy');

Route::get('proveedor/oferta','ProveedorController@offer');
Route::post('ofertar','ProveedorController@saveoffer');


//Correo Contacto
Route::post('enviar', ['as' => 'enviar', 'uses' => 'EmailController@send'] );
/*Route::get('contacto', ['as' => 'contacto', 'uses' => 'EmailController@index'] );*/

//Carrito Compra
Route::get('carrito','CarritoController@index');
Route::post('añadir_carrito','CarritoController@store');
Route::delete('eliminar/carrito/{id}','CarritoController@destroy');
Route::get('presupuesto/{id}','CarritoController@presupuesto');

//compras
Route::get('compras','PerfilController@getCompras');


Route::get('compras/{id}','UsuariosController@getCompras');


Route::get('factura/{id}','UsuariosController@cargarFactura');
Route::get('fiscal/{id}','UsuariosController@guardarFactura');


Route::get('busqueda','HomeController@search');