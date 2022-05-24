<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\CompraModel;
use App\Models\TemporalModel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use DB;


class CompraController extends Controller
{
    public function index(){
        $compras = DB::table('compra as c') 
                    ->join('proveedores as p', 'p.idproveedor', 'c.idproveedor')
                    ->join('catprogramatica as cat', 'cat.idcatprogramatica', 'c.idcatprogramatica')
                    ->join('programa as prog', 'prog.idprograma', 'c.idprograma')
                    ->join('areas as a', 'a.idarea', 'c.idarea')
                    ->select('c.idcompra','a.nombrearea','c.objeto', 'c.justificacion','p.nombreproveedor','c.preventivo','c.numcompra','cat.codcatprogramatica',
                            'prog.nombreprograma')
                    -> orderBy('c.idcompra', 'desc')
                    -> paginate(7);
        $back = true;
        return view('compras.pedido.index',['compras'=>$compras, 'back' =>$back]);
    }

    public function search(Request $request){
        $query = trim($request->get('searchText'));
        $query2 = trim($request->get('searchText2'));
        $query3 = trim($request->get('searchText3'));
        $compras = DB::table('compra as c') 
                    ->join('proveedores as p', 'p.idproveedor', 'c.idproveedor')
                    ->join('catprogramatica as cat', 'cat.idcatprogramatica', 'c.idcatprogramatica')
                    ->join('programa as prog', 'prog.idprograma', 'c.idprograma')
                    ->join('areas as a', 'a.idarea', 'c.idarea')
                    ->select('c.idcompra','a.nombrearea','c.objeto', 'c.justificacion','p.nombreproveedor','c.preventivo','c.numcompra','cat.codcatprogramatica',
                            'prog.nombreprograma')
                    ->where('a.nombrearea','LIKE','%'.$query.'%')
                    ->where('p.nombreproveedor','LIKE','%'.$query2.'%')
                    ->where('c.preventivo','LIKE','%'.$query3.'%')
                    -> orderBy('c.idcompra', 'desc')
                    -> paginate(7);
        $back = false;
        return view('compras.pedido.indexSearch',['compras'=>$compras, 'back' =>$back]);
    }

    public function indexAjax(){
        return datatables()
            ->query(DB::table('compra as c')
            ->join('proveedores as p', 'p.idproveedor', 'c.idproveedor')
            ->join('catprogramatica as cat', 'cat.idcatprogramatica', 'c.idcatprogramatica')
            ->join('programa as prog', 'prog.idprograma', 'c.idprograma')
            ->join('areas as a', 'a.idarea', 'c.idarea')
            ->select('c.idcompra','a.nombrearea','c.objeto','c.justificacion','p.nombreproveedor','c.preventivo','c.numcompra','cat.codcatprogramatica',
                    'prog.nombreprograma')
            /*->select('a.id as comprobante_id','a.fecha','a.nro_comprobante','a.concepto','b.empresa','a.monto','a.status','a.copia',
                    DB::raw("if(a.status = '0','BORRADOR',if(a.status = '1', 'APROBADO','ANULADO')) as status_search"),
                    DB::raw("DATE_FORMAT(a.fecha,'%d/%m/%Y') as fecha_comprobante"))*/)
            /*->filterColumn('status_search', function($query, $keyword) {
                $sql = "if(a.status = '0','BORRADOR',if(a.status = '1', 'APROBADO', 'ANULADO'))  like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
                })*/
            /*->filterColumn('fecha_comprobante', function($query, $keyword) {
                $sql = "DATE_FORMAT(a.fecha,'%d/%m/%Y')  like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
                })*/
            ->addColumn('btnActions','compras.pedido.partials.actions')
            ->rawColumns(['btnActions'])
            ->toJson();
    }

    public function create()
    {
        $proveedores = DB::table('proveedores')->get();
        $areas = DB::table('areas')->get();
        $catprogramaticas = DB::table('catprogramatica')->get();
        $programas = DB::table('programa')->get();
    
        //dd($areas);
       return view('compras.pedido.create', ["proveedores" => $proveedores,"areas" => $areas,"catprogramaticas" => $catprogramaticas,"programas" => $programas]);
       // return view("compras.productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $compras = new CompraModel();
            $compras -> objeto = $request->input('objeto');
            $compras -> justificacion = $request->input('justificacion');
            $compras -> preventivo = $request->input('preventivo');
            $compras -> tipo = $request->input('tipo');
            $compras -> numcompra =$request->input('numcompra');
            $compras -> controlinterno = $request->input('controlinterno');
            $compras -> idproveedor = $request->input('idproveedor');
            $compras -> idarea = $request->input('idarea');
            $compras -> idcatprogramatica = $request->input('idcatprogramatica');
            $compras -> idprograma = $request->input('idprograma');
            $compras -> idproveedor = $request->input('idproveedor');
            $compras -> estadocompra = 1;
            $compras -> estado1 = 1;
            $compras -> estado2 = 1;
            $compras -> estado3 = 1;
        
        //$productos -> estadoprodserv = 1;
      
      
        if($compras->save()){
            $request->session()->flash('message', 'Registro Procesado');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Error al Procesar Registro');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('pedido.index');
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
    public function edit($idcomp){
        $personal = User::find(Auth::user()->id);
        $id=$personal->id;
        $detalle = TemporalModel::find($id);
    if(is_null($detalle)){

    $detalle = new TemporalModel;
    $detalle->idtemporal=$id;
    $detalle->idusuario=$id;
    $detalle->idcompra=$idcomp;
    $detalle->save();
    }
    else{
    $detalle->idtemporal=$id;
    $detalle->idusuario=$id;
    $detalle->idcompra=$idcomp;
    $detalle->update();

    }
       //dd($detalle);
       return Redirect::to('compras/detalle');
      
    }
    public function editar($idcompra){
        $compras = CompraModel::find($idcompra);
        $proveedores = DB::table('proveedores')->get();
        $areas = DB::table('areas')->get();
        $catprogramaticas = DB::table('catprogramatica')->get();
        $programas = DB::table('programa')->get();
    
        return view('compras.pedido.editar', ["compras" => $compras,"proveedores" => $proveedores,"areas" => $areas,"catprogramaticas" => $catprogramaticas,"programas" => $programas]);
        
      }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcompra)
    {
        $compras = CompraModel::find($idcompra);
        $compras -> objeto = $request->input('objeto');
        $compras -> justificacion = $request->input('justificacion');
        $compras -> preventivo = $request->input('preventivo');
        $compras -> tipo = $request->input('tipo');
        $compras -> numcompra =$request->input('numcompra');
        $compras -> controlinterno = $request->input('controlinterno');
        $compras -> idproveedor = $request->input('idproveedor');
        $compras -> idarea = $request->input('idarea');
        $compras -> idcatprogramatica = $request->input('idcatprogramatica');
        $compras -> idprograma = $request->input('idprograma');
        $compras -> idproveedor = $request->input('idproveedor');
    
        //$medida->update();
        if($compras->save()){
          $request->session()->flash('message', 'Registro Procesado');
      }else{
          $request->session()->flash('message', 'Error al Procesar Registro');
      }
        return redirect('compras/pedido');
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
