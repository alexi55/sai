<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreasModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $areas = DB::table('areas') 
        //->where('nombreumedida','LIKE','%'.$query.'%')
        -> where('estadoarea','=', 1)
        -> orderBy('idarea', 'desc')
        -> paginate(10);
        // return view('compras.medidas.index', ["medidas" => $medidas]);
         return view('compras.areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areas = new AreasModel();
        $areas -> nombrearea = $request->input('nombre');
       
        
        $areas -> estadoarea = 1;
      
      
        if($areas->save()){
            $request->session()->flash('message', 'Registro Procesado Exitosamente');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Error al procesar el registro');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('areas.index');
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
    public function edit($idarea)
    {
        $areas = AreasModel::find($idarea);
    
        return view('compras/areas/edit')->with('areas', $areas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idarea)
    {
        $areas = AreasModel::find($idarea);
        $areas -> nombrearea = $request->input('nombre');
        
        //$medida->update();
        if($areas->save()){
          $request->session()->flash('message', 'Registro Procesado');
      }else{
          $request->session()->flash('message', 'Error al Procesar Registro');
      }
        return redirect('compras/areas');
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