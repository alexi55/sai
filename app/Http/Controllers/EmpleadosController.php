<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadosModel;
use App\Models\AreasModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
             $empleados = DB::table('empleados as e') 
             ->where('nombres','LIKE','%'.$query.'%')
             ->join('areas as a', 'a.idarea', '=', 'e.idarea')
             ->select('a.nombrearea','e.idemp','e.nombres','e.ap_pat','e.ap_mat','e.ci','e.f_nac','e.sexo','e.telefono','e.correo')
             //-> where('d.idcompra','=', $id2)
             -> orderBy('e.idemp', 'desc')
             -> paginate(5);
             //dd($empleado);
             return view('compras.empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = DB::table('areas')->get();
        
        return view('compras.empleados.create', ["areas" => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     *  for ($i=1;$i<=10000;$i++)
       *  {
        *     }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $empleados = new EmpleadosModel();
    $empleados -> nombres = $request->input('nombres');
    $empleados -> ap_pat = $request->input('ap_pat');
    $empleados -> ap_mat = $request->input('ap_mat');
    $empleados -> ci = $request->input('ci');
    $empleados -> f_nac = $request->input('f_nac');
    $empleados -> sexo = $request->input('sexo');
    $empleados -> telefono = $request->input('telefono');
    $empleados -> correo = $request->input('correo');
    $empleados -> idarea = $request->input('idarea');
    
    $empleados -> estado = 1;
    $empleados -> estado_u = 1;
  
  
    if($empleados->save()){
        $request->session()->flash('message', 'Registro Procesado');
        //echo 'Cliente salvo com sucesso';
    }else{
        $request->session()->flash('message', 'Error al Procesar Registro');
        //echo 'Houve um erro ao salvar';
    }


    return redirect()->route('empleados.index');
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
    public function edit($id)
    {
        
        $empleados = EmpleadosModel::find($id);
       $areas = DB::table('areas')->get();
        //$roles = Role::pluck('title','id');
        return view('compras.empleados.edit',compact('empleados','areas'));
        //return view('compras.empleados.index', ["empleado" => $empleado, "searchText" => $querry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idempleado)
    {
        $empleados = EmpleadosModel::find($idempleado);
        $empleados -> nombres = $request->input('nombres');
        $empleados -> ap_pat = $request->input('ap_pat');
        $empleados -> ap_mat = $request->input('ap_mat');
        $empleados -> ci = $request->input('ci');
        $empleados -> f_nac = $request->input('f_nac');
        $empleados -> sexo = $request->input('sexo');
        $empleados -> telefono = $request->input('telefono');
        $empleados -> correo = $request->input('correo');
        $empleados -> idarea = $request->input('idarea');
    
        //$empleados->update();
        if($empleados->save()){
          $request->session()->flash('message', 'Registro Procesado');
      }else{
          $request->session()->flash('message', 'Error al Procesar Registro');
      }
        return redirect('compras/empleados');
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