<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadosModel;
use App\Models\AreasModel;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use Yajra\Datatables\Datatables;

class PlantaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


        //index 
   public function index()
   {
            
   
             
     //$customers = Customer::all();
            // return view('compras.empleados.index', compact('customers'));
 
            //$id=25;
            //$purchases = AreasModel::findOrFail($id)->purchases;

            //return Datatables::of($purchases)->make(true);
            //dd($purchases);

    return view('rechumanos.planta.index');

   }

    public function list()
    
    {
        $customers = AreasModel::select(['idarea', 'nombrearea', 'estadoarea', 'idnivel']);
        //$customers = AreasModel::select();

        return Datatables::of($customers)
            ->addColumn('details_url', function($customer) {
                return route('planta_detalle', $customer->idarea);
            })
            ->addColumn('btn2', function($row){

                $btn2 = '<a href="'. route('planta.lista', $row->idarea) .'" class="btn btn-outline-info btn-sm"  title="Editar">Acceder</a>';
                
                 return $btn2;
            })
         ->rawColumns(['btn2'])
            ->make(true);

    }
   public function detalle($id)
   {
   $purchases = DB::table('empleados as e') 
   ->join('areas as a', 'a.idarea', '=', 'e.idarea')
   ->join('file as f', 'f.idfile', '=', 'e.idfile')
   ->select('e.idemp','e.nombres','e.ap_pat','e.ap_mat','e.ci','f.numfile','f.cargo')
   -> where('e.idarea','=', $id)
   //-> orderBy('e.idemp', 'desc')
   -> get();
    
       // $purchases = AreasModel::findOrFail($id)->purchases;

        return Datatables::of($purchases)
        ->addIndexColumn()
        ->addColumn('btn', function($row){

               $btn = '<a href="'. route('planta.edit', $row->idemp) .'" class="btn btn-outline-success btn-sm"  title="Editar">Editar</a>';
               
                return $btn;
        })
        ->rawColumns(['btn'])
        ->make(true);
    }




    public function edit($id)
    {
        
       // $empleados = EmpleadosModel::find($id);
      // $areas = DB::table('areas')->get();
        //$roles = Role::pluck('title','id');
        return view('rechumanos.planta.edit');
        //return view('compras.empleados.index', ["empleado" => $empleado, "searchText" => $querry]);
    }


    public function plantanuevo($id)
    {
        
       // $empleados = EmpleadosModel::find($id);
      // $areas = DB::table('areas')->get();
        //$roles = Role::pluck('title','id');
        return view('rechumanos.planta.create');
        //return view('compras.empleados.index', ["empleado" => $empleado, "searchText" => $querry]);
    }
    
    public function lista($idarea)
    {
        

        $empleados = DB::table('empleados as e') 
        ->join('areas as a', 'a.idarea', '=', 'e.idarea')
        ->join('file as f', 'f.idfile', '=', 'e.idfile')
        ->select('f.numfile','e.idemp','e.nombres','e.ap_pat','e.ap_mat','f.cargo','f.nombrecargo','f.habbasico','f.categoria','f.niveladm','f.clase','f.nivelsal','e.fechingreso','e.natalicio','e.edad','e.ci','e.poai','e.exppoai','e.decjurada','e.expdecjurada','e.sippase','e.expsippase','e.servmilitar','e.idioma','e.induccion','e.expinduccion','e.progvacacion','e.expprogvacacion','e.vacganadas','e.vacpendientes','e.vacusasdas','e.segsalud','e.inamovilidad','e.aservicios','e.cvitae','e.telefono','e.biometrico','e.gradacademico','e.rae','e.regprofesional','e.evdesempenio')
        -> where('e.idarea','=', $idarea)
        -> paginate(10);
        
       // $empleados = EmpleadosModel::find($id);
      // $areas = DB::table('areas')->get();
        //$roles = Role::pluck('title','id');
        //return view('rechumanos.planta.lista');
        return view('rechumanos.planta.lista', ["empleados" => $empleados, "idarea" => $idarea]);
    }


    public function guardarplanta(Request $request)
    {
        
      
    }
    
    
}