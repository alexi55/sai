<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\ProveedoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix'=>"admin",'as' => 'admin.','namespace' => 'App\Http\Controllers\Admin','middleware' => ['auth','AdminPanelAccess']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController')->except(['show']);
    

});


Route::group(['namespace' => 'App\Http\Controllers'], function() {
    ///compras medidas
    Route::resource('compras/medidas', 'MedidaController');
    //compras pedido
    Route::resource('compras/pedido', 'CompraController');
    Route::post('compras-pedido/search','CompraController@search')->name('compras.pedido.search');
    Route::get('compras-pedido/indexAjax','CompraController@indexAjax')->name('compras.pedido.indexAjax');
    //compras detalle
    Route::resource('compras/detalle', 'DetalleCompraController');
    //compras partida
    Route::resource('compras/partida', 'PartidaController');
    //compras producto
    Route::resource('compras/productos', 'ProdServController');
    //compras empleados
    Route::resource('compras/empleados', 'EmpleadosController');
    //compras proveedores
    Route::resource('compras/proveedores', 'ProveedoresController');
    //Route::get('compras/proveedores/{id}/editardoc', 'ProveedoresController@editardoc');
    Route::get('compras/proveedores/{id}/editardoc', ['uses' => 'ProveedoresController@editardoc','as' => 'admin.users.edit']);
   // Route::get('compras/proveedores/{id}/createdoc', 'ProveedoresController@createdoc');
    //Route::get('compras/proveedores/{id}/createdocproveedor', 'ProveedoresController@createdoc');
    Route::get('compras/proveedores/{id}/createdocproveedor', 'ProveedoresController@createdoc')->name('ProveedoresController.createdoc');
    //Route::POST('insertar', [ProveedoresController::class,'insertar']);
    Route::POST('compras/proveedores/insertar', 'ProveedoresController@insertar')->name('ProveedoresController.insertar');

    
    //compras areas
    Route::resource('compras/areas', 'AreasController');
    //compras programas
    Route::resource('compras/programas', 'ProgramaController');
    //compras categorias prograticas
    Route::resource('compras/catprog', 'CatProgController');
    //compras pedido
    Route::get('compras/pedido/{id}/editar', 'CompraController@editar');
    Route::get('compras/detalle/{id}/invitacion', 'DetalleCompraController@invitacion');
    Route::get('compras/detalle/{id}/aceptacion', 'DetalleCompraController@aceptacion');
    Route::get('compras/detalle/{id}/cotizacion', 'DetalleCompraController@cotizacion');
    Route::get('compras/detalle/{id}/adjudicacion', 'DetalleCompraController@adjudicacion');
    Route::get('compras/detalle/{id}/orden', 'DetalleCompraController@orden');
    Route::get('compras/detalle/{id}/principal', 'DetalleCompraController@crearOrdenxxx');
    Route::get('compras/detalle/{id}/principalorden', 'DetalleCompraController@crearOrdendocxx');
    //compras orden de compra
    Route::POST('compras/detalle/principal', 'DetalleCompraController@crearOrden')->name('DetalleCompraController.crearOrden');
    Route::POST('compras/detalle/principalorden', 'DetalleCompraController@crearOrdendoc')->name('DetalleCompraController.crearOrdendoc');
    Route::get('compras/detalle/{id}/destroyed2', 'DetalleCompraController@destroyed2')->name('DetalleCompraController.eliminar2');

















    //Route::post('compras/detalle/{{id}}',['uses' => 'DetalleCompraController@crearOrden','as' => 'compras.detalle.principalorden']);
    //Route::POST('compras/detalle/principalorden',['uses' => 'DetalleCompraController@crearOrden','as' => 'test.route']);
    //Route::POST('compras/detalle/principalorden',['uses' => 'DetalleCompraController@crearOrden','as' => 'test.route']);
    //Route::post('/compras/detalle/{{id}}/principalorden', 'DetalleCompraController@crearOrden');
    //Route::POST('compras/detalle/crearOrdendoc',['uses' => 'DetalleCompraController@crearOrdendoc','as' => 'test.show']);
    // Route::get('compras/detalle/{id}/principalorden', 'DetalleCompraController@crearOrden22');
    //Route::put('users/{user}/update2', 'Admin\UserController@update2');
    //Route::resource('users', 'Admin\UserController');
    //Route::get('compras/detalle/{id}/profile', 'DetalleCompraController@profile')->name('profile');
});