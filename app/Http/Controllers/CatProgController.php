<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatProgModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;

class CatProgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catprogs = DB::table('catprogramatica') 
        //->where('nombreumedida','LIKE','%'.$query.'%')
        -> where('estadocatprogramatica','=', 1)
        -> orderBy('idcatprogramatica', 'asc')
        -> paginate(10);
        // return view('compras.medidas.index', ["medidas" => $medidas]);
         return view('compras.catprog.index',compact('catprogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.catprog.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catprogs = new CatProgModel();
        $catprogs ->codcatprogramatica = $request->input('nombre');
        $catprogs ->nombrecatprogramatica = $request->input('codigo');
       
        
        $catprogs -> estadocatprogramatica = 1;
      
      
        if($catprogs->save()){
            $request->session()->flash('message', 'Registro Procesado Exitosamente');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Error al procesar el registro');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('catprog.index');
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
    public function edit($idcatprog)
    {
        $catprogs = CatProgModel::find($idcatprog);
    
        return view('compras/catprog/edit')->with('catprogs', $catprogs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcatprogamatica)
    {
        $catprogs = CatProgModel::find($idcatprogamatica);
        $catprogs -> nombrecatprogramatica = $request->input('nombre');
        $catprogs -> codcatprogramatica = $request->input('codigo');
        
        //$medida->update();
        if($catprogs->save()){
          $request->session()->flash('message', 'Registro Procesado');
      }else{
          $request->session()->flash('message', 'Error al Procesar Registro');
      }
        return redirect('compras/catprog');
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
