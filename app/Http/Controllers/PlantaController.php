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
            })->make(true);

    }
   public function detalle($id)
    {
        $purchases = AreasModel::findOrFail($id)->purchases;

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
    
    
}
