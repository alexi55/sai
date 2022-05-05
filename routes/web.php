<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedidaController;

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
    Route::resource('compras/medidas', 'MedidaController');
    Route::resource('compras/pedido', 'CompraController');
    Route::resource('compras/detalle', 'DetalleCompraController');
    Route::resource('compras/partida', 'PartidaController');
    Route::resource('compras/productos', 'ProdServController');
    Route::resource('compras/empleados', 'EmpleadosController');
    Route::resource('compras/proveedores', 'ProveedoresController');
    Route::resource('compras/areas', 'AreasController');
    Route::resource('compras/programas', 'ProgramaController');
    Route::resource('compras/catprog', 'CatProgController');
    Route::get('compras/pedido/{id}/editar', 'CompraController@editar');
    Route::get('compras/detalle/{id}/invitacion', 'DetalleCompraController@invitacion');
    Route::get('compras/detalle/{id}/aceptacion', 'DetalleCompraController@aceptacion');
    Route::get('compras/detalle/{id}/cotizacion', 'DetalleCompraController@cotizacion');
    Route::get('compras/detalle/{id}/adjudicacion', 'DetalleCompraController@adjudicacion');
    Route::get('compras/detalle/{id}/orden', 'DetalleCompraController@orden');
    Route::get('compras/detalle/{id}/principal', 'DetalleCompraController@crearOrden');
//Route::put('users/{user}/update2', 'Admin\UserController@update2');
//Route::resource('users', 'Admin\UserController');
});