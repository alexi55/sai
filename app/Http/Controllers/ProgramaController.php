<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramaModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;


class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = DB::table('programa') 
        //->where('nombreumedida','LIKE','%'.$query.'%')
        -> where('estadoprograma','=', 1)
        -> orderBy('idprograma', 'desc')
        -> paginate(10);
        // return view('compras.medidas.index', ["medidas" => $medidas]);
         return view('compras.programas.index',compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.programas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programas = new ProgramaModel();
        $programas -> nombreprograma = $request->input('nombre');
       
        
        $programas -> estadoprograma = 1;
      
      
        if($programas->save()){
            $request->session()->flash('message', 'Registro Procesado Exitosamente');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Error al procesar el registro');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('programas.index');
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
    public function edit($idprograma)
    {
        $programas = ProgramaModel::find($idprograma);
    
        return view('compras/programas/edit')->with('programas', $programas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idprograma)
    {
        $programas = ProgramaModel::find($idprograma);
        $programas -> nombreprograma = $request->input('nombre');
        
        //$medida->update();
        if($programas->save()){
          $request->session()->flash('message', 'Registro Procesado');
      }else{
          $request->session()->flash('message', 'Error al Procesar Registro');
      }
        return redirect('compras/programas');
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
