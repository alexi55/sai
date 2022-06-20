<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\PrartidaController;
use App\Http\Controllers\ProdServController;
use App\Http\Controllers\PlantaController;

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
    Route::get('compras/medidas/index', 'MedidaController@index')->name('medidas.index');
    Route::get('compras/medidas/list', 'MedidaController@listado')->name('medidas.list');
    Route::get('compras/medidas/{id}/edit', 'MedidaController@editar')->name('medidas.edit');
    Route::POST('compras/medidas/{id}/update', 'MedidaController@update')->name('medidas.update');
    Route::get('compras/medidas/create', 'MedidaController@create')->name('medidas.create');
    Route::POST('compras/medidas/store', 'MedidaController@store')->name('medidas.store');


    //compras pedido
    Route::resource('compras/pedido', 'CompraController');
;



    //compras detalle
    Route::resource('compras/detalle', 'DetalleCompraController');



    //compras partida
   // Route::resource('compras/partida', 'PartidaController');
    Route::get('compras/partida/index', 'PartidaController@index')->name('partida.index');
    Route::get('compras/partida/listado', 'PartidaController@listado')->name('partida.list');



    //compras producto
    //Route::resource('compras/productos', 'ProdServController');
    //Route::get('compras/productos/{id}/edit', ['uses' => 'ProdServController@editar','as' => 'productos.edit']);
    Route::get('compras/productos/index', 'ProdServController@index')->name('productos.index');
    Route::get('compras/productos/list', 'ProdServController@list')->name('producto.list');
    
    Route::get('compras/productos/{id}/edit', 'ProdServController@editar')->name('productos.edit');
    Route::POST('compras/productos/{id}/update', 'ProdServController@update')->name('productos.update');
    Route::get('compras/productos/create', 'ProdServController@create')->name('productos.create');
    Route::POST('compras/productos/store', 'ProdServController@store')->name('productos.store');



    //compras empleados
    //Route::resource('compras/empleados', 'EmpleadosController');
    Route::get('compras/empleados/index', 'EmpleadosController@index')->name('empleados.index');
    Route::get('compras/empleados/list', 'EmpleadosController@list')->name('empleados.list');
   //Route::get('compras/empleados/detalle/{id}', 'EmpleadosController@detalle')->name('empleados_detalle');
   // Route::get('compras/empleados/{id}/edit', 'EmpleadosController@edit')->name('empleados.edit');
   // Route::POST('compras/empleados/{id}/update', 'EmpleadosController@update')->name('empleados.update');
   // Route::get('compras/empleados/create', 'EmpleadosController@create')->name('empleados.create');
    //Route::POST('compras/empleados/store', 'EmpleadosController@store')->name('empleados.store');


    //rechumanos empleados planta
    //Route::resource('compras/empleados', 'EmpleadosController');
    Route::get('rechumanos/planta/index', 'PlantaController@index')->name('planta.index');
    Route::get('rechumanos/planta/list', 'PlantaController@list')->name('planta.list');
   Route::get('rechumanos/planta/detalle/{id}', 'PlantaController@detalle')->name('planta_detalle');
   Route::get('rechumanos/planta/edit/{id}', 'PlantaController@edit')->name('planta.edit');
   // Route::POST('rechumanos/planta/{id}/update', 'EmpleadosController@update')->name('empleados.update');
   // Route::get('rechumanos/planta/create', 'EmpleadosController@create')->name('empleados.create');
    //Route::POST('rechumanos/planta/store', 'EmpleadosController@store')->name('empleados.store');



    //compras proveedores
    // Route::get('compras/proveedores/{id}/createdoc', 'ProveedoresController@createdoc');
    //Route::get('compras/proveedores/{id}/createdocproveedor', 'ProveedoresController@createdoc');
    //Route::get('compras/proveedores/{id}/editardoc', 'ProveedoresController@editardoc');
    //Route::POST('insertar', [ProveedoresController::class,'insertar']);
    //Route::resource('compras/proveedores', 'ProveedoresController');

    Route::get('compras/proveedores/index', 'ProveedoresController@index')->name('proveedores.index');
    Route::get('compras/proveedores/list', 'ProveedoresController@list')->name('proveedores.list');
    Route::get('compras/proveedores/{id}/edit', 'ProveedoresController@edit')->name('proveedores.edit');
    Route::POST('compras/proveedores/{id}/update', 'ProveedoresController@update')->name('proveedores.update');
    Route::get('compras/proveedores/create', 'ProveedoresController@create')->name('proveedores.create');
    Route::POST('compras/proveedores/store', 'ProveedoresController@store')->name('proveedores.store');

    Route::get('compras/proveedores/{id}/editardoc', ['uses' => 'ProveedoresController@editardoc','as' => 'admin.users.edit']);
    Route::get('compras/proveedores/{id}/createdocproveedor', 'ProveedoresController@createdoc')->name('ProveedoresController.createdoc');
    Route::POST('compras/proveedores/insertar', 'ProveedoresController@insertar')->name('ProveedoresController.insertar');

    
    //compras areas
    //Route::resource('compras/areas', 'AreasController');
    Route::get('compras/areas/index', 'AreasController@index')->name('areas.index');
    Route::get('compras/areas/list', 'AreasController@listado')->name('areas.list');
    Route::get('compras/areas/create', 'AreasController@create')->name('areas.create');
    Route::get('compras/areas/{id}/edit', 'AreasController@edit')->name('areas.edit');
    Route::POST('compras/areas/{id}/update', 'AreasController@update')->name('areas.update');
    Route::POST('compras/areas/store', 'AreasController@store')->name('areas.store');
    Route::get('compras/areas/{id}/file', 'AreasController@file')->name('areas.file');
    Route::Get('productByCategory/{id}', 'AreasController@byCategory');
    



    //compras programas
    //Route::resource('compras/programas', 'ProgramaController');
    Route::get('compras/programas/index', 'ProgramaController@index')->name('programas.index');
    Route::get('compras/programas/list', 'ProgramaController@listado')->name('programas.list');
    Route::get('compras/programas/{id}/edit', 'ProgramaController@edit')->name('programas.edit');
    Route::POST('compras/programas/{id}/update', 'ProgramaController@update')->name('programas.update');
    Route::get('compras/programas/create', 'ProgramaController@create')->name('programas.create');
    Route::POST('compras/programas/store', 'ProgramaController@store')->name('programas.store');


    //compras categorias prograticas
    //Route::resource('compras/catprog', 'CatProgController');
    Route::get('compras/catprog/index', 'CatProgController@index')->name('catprog.index');
    Route::get('compras/catprog/list', 'CatProgController@listado')->name('catprog.list');
    Route::get('compras/catprog/{id}/edit', 'CatProgController@editar')->name('catprog.edit');
    Route::POST('compras/catprog/{id}/update', 'CatProgController@update')->name('catprog.update');
    Route::get('compras/catprog/create', 'CatProgController@create')->name('catprog.create');
    Route::POST('compras/catprog/store', 'CatProgController@store')->name('catprog.store');




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