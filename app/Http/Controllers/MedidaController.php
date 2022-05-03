<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedidaModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;



class MedidaController extends Controller
{
   
     
         //index 
         public function index(Request $request)
         {
         
          $query=trim($request->get('searchText'));
             //obtener las categorias
             $medidas = DB::table('umedida') 
             ->where('nombreumedida','LIKE','%'.$query.'%')
             -> where('estadoumedida','=', 1)
             -> orderBy('idumedida', 'desc')
             -> paginate(10);
             // return view('compras.medidas.index', ["medidas" => $medidas]);
              return view('compras.medidas.index',compact('medidas'));
            
         }
           public function edit($idmedida){
    $medida = MedidaModel::find($idmedida);

     return view('compras/medidas/edit')->with('medida', $medida);
    
  }


  public function update(Request $request, $idumedida){

    $medida = MedidaModel::find($idumedida);
    $medida -> nombreumedida = $request->input('nombre');

    //$medida->update();
    if($medida->save()){
      $request->session()->flash('message', 'Registro Procesado');
  }else{
      $request->session()->flash('message', 'Error al Procesar Registro');
  }
    return redirect('compras/medidas');
}


public function create()
{
    
    return view('compras.medidas.create');
}

public function store(request $request){

  $medida = new MedidaModel();
  $medida -> nombreumedida = $request->input('nombre');
  
  $medida -> estadoumedida = 1;


  $medida->save();
  return redirect()->route('medidas.index');
}

public function destroy($id){
 

  $medidas = MedidaModel::find($id);
$medidas->estadoumedida=0;
$medidas->update();


 //dd($detalle);
 return redirect()->route('medidas.index');

}

}