<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProveedoresModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //obtener las categorias
          $proveedores = DB::table('proveedores') 
       
          -> where('estadoproveedor','=', 1)
          -> orderBy('idproveedor', 'desc')
          -> paginate(10);
           return view('compras.proveedores.index', ["proveedores" => $proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedores = new ProveedoresModel();
        $proveedores -> nombreproveedor = $request->input('nombre');
        $proveedores -> representante = $request->input('representante');
        $proveedores -> cedula = $request->input('cedula');
        $proveedores -> nitCi = $request->input('nitCi');
        $proveedores -> telefonoproveedor = $request->input('telefono');
        
        $proveedores -> estadoproveedor = 1;
      
      
        if($proveedores->save()){
            $request->session()->flash('message', 'Registro Procesado Exitosamente');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Error al procesar el registro');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idproveedor){
        $proveedores = ProveedoresModel::find($idproveedor);
    
         return view('compras/proveedores/edit')->with('proveedores', $proveedores);
        
      }



      /**llamar a la vista create.. */
public function create()
{
    
    return view('compras.proveedores.create');
   // return view("compras.productos.create");
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproveedor)
    {
        
    $proveedores = ProveedoresModel::find($idproveedor);
    $proveedores -> nombreproveedor = $request->input('nombre');
    $proveedores -> nitproveedor = $request->input('nit');
    $proveedores -> telefonoproveedor = $request->input('telefono');
    //$medida->update();
    if($proveedores->save()){
      $request->session()->flash('message', 'Registro Procesado');
  }else{
      $request->session()->flash('message', 'Error al Procesar Registro');
  }
    return redirect('compras/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}