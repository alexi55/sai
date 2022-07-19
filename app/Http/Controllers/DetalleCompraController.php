<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\CompraModel;
use App\Models\TemporalModel;
use App\Models\ProdServModel;
use App\Models\DocOrdenModel;
use App\Models\DetalleCompraModel;
use App\Models\OrdenCompraModel;
use App\Models\OrdenDocModel;
use App\Models\ResponsablesModel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use NumerosEnLetras;

class DetalleCompraController extends Controller
{
        ////vista detalle compra

    public function index()
    {
        $personal = User::find(Auth::user()->id);
        $id=$personal->id;
        $detalle = TemporalModel::find($id);
        $id2=$detalle->idcompra;
        // tomar en cuenta $compra = CompraModel::find($id2);
        $prodserv = DB::table('detallecompra as d') 
        ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
        ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
        ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','d.cantidad','d.subtotal','d.precio')
        //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> where('d.idcompra','=', $id2)
        -> orderBy('d.iddetallecompra', 'asc')
        -> paginate(7);
 
        $productos = DB::table('prodserv') 
        //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> where('estadoprodserv','=', 1)
        -> orderBy('idprodserv', 'asc')
        -> get();
 
       // $detallecompra = DetalleCompraModel::find($id2);
        $valor_total = $prodserv->sum('subtotal');

      
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.nombrecompra','o.solicitante','o.proveedor')
        -> where('o.compra_idcompra','=', $id2)->first();
       
        $resultado=$ordencompra;

        $estado=1;

        if(is_null($resultado))
        
            {
                $estado=0;
            }
 
        //$detallecompra = CompraModel::find($id2);
        //$detallecompra = CompraModel::all();
        //$venda_produtos = Venda_Produto::find($id);
        //dd($valor_total);
        return view('compras.detalle.index',['prodserv'=>$prodserv,'productos'=>$productos,'valor_total'=>$valor_total,'idcompra'=>$id2,'estado'=>$estado]);
    }





    //--------------------------------------------------
    //---------------------------------------------------
    
    


    //cargar items de productos en el detalle

    public function store (Request $request)
    {

        $personal = User::find(Auth::user()->id);
        $id=$personal->id;
        $detalle = TemporalModel::find($id);
        $id2=$detalle->idcompra;
        $prod=$request->get('producto');
        $producto = ProdServModel::find($prod);
        $precio=$producto->precioprodserv;
        $cantidad=$request->get('cantidad');
        //$canti=$request->get('producto');
        $detalle=new DetalleCompraModel;
        $detalle->idprodserv=$request->get('producto');
        $detalle->idcompra=$id2;
        $detalle->cantidad=$request->get('cantidad');
        $detalle->precio=$precio;
        $detalle->subtotal=$precio * $cantidad;
    
        $detallito = DB::table('detallecompra as d') 
        ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
        ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
        ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','d.cantidad','d.subtotal','d.precio')
        //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> orwhere('d.idprodserv','=', $prod)
        -> where('d.idcompra','=', $id2)->get();

        if($detallito->isEmpty()){
        $detalle->save();
        $request->session()->flash('message', 'Registro Agregado');
        
        }
        else{
        $request->session()->flash('message', 'El Item Ya existe en la Planilla');
        
        }
         return redirect('compras/detalle');
    }


       //--------------------------------------------------
       //---------------------------------------------------


       //imprimir el detalle de la compra
    
    public function show(){
        $personal = User::find(Auth::user()->id);
        $id=$personal->id;
        $detalle = TemporalModel::find($id);
        $id2=$detalle->idcompra;
        // tomar en cuenta $compra = CompraModel::find($id2);
        $prodserv = DB::table('detallecompra as d') 
        ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
        ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
        ->join('partida as par', 'par.idpartida', '=', 'ps.partida_idpartida')
        ->join('umedida as u', 'u.idumedida', '=', 'ps.umedida_idumedida')
        ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','ps.detalleprodserv','par.codigopartida','u.nombreumedida','d.cantidad','d.subtotal','d.precio')
         //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> where('d.idcompra','=', $id2)
        -> orderBy('d.iddetallecompra', 'asc')
        -> paginate(7);
    
        $datos = DB::table('areas as a') 
        ->join('compra as c', 'c.idarea', '=', 'a.idarea')
        //->select('a.nombrearea')
        -> where('c.idcompra','=', $id2)
        ->get();
        // $datos2=$datos->nombrearea;
        // $detallecompra = DetalleCompraModel::find($id2);
          $valor_total = $prodserv->sum('subtotal');
    
         //$detallecompra = CompraModel::find($id2);
         //$detallecompra = CompraModel::all();
         //$venda_produtos = Venda_Produto::find($id);
         //dd($datos2);
        
        //return view('compras.detalle.print',['prodserv'=>$prodserv,'datos'=>$datos]);
        return view('compras.detalle.print',compact('prodserv','valor_total'));
    
        //return view('compras/pedidos/index');
    }


    //--------------------------------------------------
    //---------------------------------------------------



    public function invitacion($id)
    {
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.numinforme','o.fechaorden','o.nombrecompra','o.solicitante','o.modalidadcontratacion',
        'o.precioreferencial','o.proveedor','o.representante','o.cedula','o.nitci','o.telefono',
        'o.approgramatica','o.partida','o.actividad','o.nordencompra','o.npreventivo',
        'o.hojaruta','o.numcontrolinterno','o.plazoentrega','o.fechainicio',
        'o.fechaconclusion','o.fechainvitacion','o.fechaaceptacion','o.codciteinvitacion',
        'o.horapresentacion', 'o.cedulaaceptacion','o.numnotaadjudicacion','o.fechainiciosolproc',
        'o.controlinter','o.autoridadsolicitante')
        -> where('o.compra_idcompra','=', $id)->first();


        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $fechaInvitacion =$ordencompra->fechainvitacion;
        $fechaInvitacion = Carbon::parse($fechaInvitacion)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechaAceptacion =$ordencompra->fechaaceptacion;
        $fechaAceptacion = Carbon::parse($fechaAceptacion)->isoFormat('D \d\e MMMM');

        $responsables = DB::table('responsables')->first();
        //$diaActual = Carbon::parse($diaActual)->isoFormat('dddd D \d\e MMMM \d\e\l Y');
       //dd($responsables);
       return view('compras.detalle.invitacion',['ordencompra'=>$ordencompra,'ordendoc'=>$ordendoc,'responsables'=>$responsables,'fechaInvitacion'=>$fechaInvitacion,'fechaAceptacion'=>$fechaAceptacion]);
    }

    //--------------------------------------------------
    //---------------------------------------------------

    public function aceptacion($id)
    {
           
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.numinforme','o.fechaorden','o.nombrecompra','o.solicitante','o.modalidadcontratacion',
        'o.precioreferencial','o.proveedor','o.representante','o.cedula','o.nitci','o.telefono',
        'o.approgramatica','o.partida','o.actividad','o.nordencompra','o.npreventivo',
        'o.hojaruta','o.numcontrolinterno','o.plazoentrega','o.fechainicio',
        'o.fechaconclusion','o.fechainvitacion','o.fechaaceptacion','o.codciteinvitacion',
        'o.horapresentacion', 'o.cedulaaceptacion','o.numnotaadjudicacion','o.fechainiciosolproc',
        'o.controlinter','o.autoridadsolicitante')
        -> where('o.compra_idcompra','=', $id)->first();


        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $fechaInvitacion =$ordencompra->fechainvitacion;
        $fechaInvitacion = Carbon::parse($fechaInvitacion)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechaAceptacion =$ordencompra->fechaaceptacion;
        $fechaAceptacion = Carbon::parse($fechaAceptacion)->isoFormat('D \d\e MMMM \d\e\l Y');
        $responsables = DB::table('responsables')->first();

       return view('compras.detalle.aceptacion',['ordencompra'=>$ordencompra,'ordendoc'=>$ordendoc,'responsables'=>$responsables,'fechaInvitacion'=>$fechaInvitacion,'fechaAceptacion'=>$fechaAceptacion]);
    }

    //---------------------------------------------------
    //---------------------------------------------------

    public function cotizacion($id)
    {
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.numinforme','o.fechaorden','o.nombrecompra','o.solicitante','o.modalidadcontratacion',
        'o.precioreferencial','o.proveedor','o.representante','o.cedula','o.nitci','o.telefono',
        'o.approgramatica','o.partida','o.actividad','o.nordencompra','o.npreventivo',
        'o.hojaruta','o.numcontrolinterno','o.plazoentrega','o.fechainicio',
        'o.fechaconclusion','o.fechainvitacion','o.fechaaceptacion','o.codciteinvitacion',
        'o.horapresentacion', 'o.cedulaaceptacion','o.numnotaadjudicacion','o.fechainiciosolproc',
        'o.controlinter','o.autoridadsolicitante')
        -> where('o.compra_idcompra','=', $id)->first();


        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $fechaInvitacion =$ordencompra->fechainvitacion;
        $fechaInvitacion = Carbon::parse($fechaInvitacion)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechaAceptacion =$ordencompra->fechaaceptacion;
        $fechaAceptacion = Carbon::parse($fechaAceptacion)->isoFormat('D \d\e MMMM \d\e\l Y');
        $responsables = DB::table('responsables')->first();


        $fechaorden =$ordencompra->fechaorden;
        $fechaorden = Carbon::parse($fechaorden)->isoFormat('dddd D \d\e MMMM \d\e\l Y');

        
        // tomar en cuenta $compra = CompraModel::find($id2);
        $prodserv = DB::table('detallecompra as d') 
        ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
        ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
        ->join('partida as par', 'par.idpartida', '=', 'ps.partida_idpartida')
        ->join('umedida as u', 'u.idumedida', '=', 'ps.umedida_idumedida')
        ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','ps.detalleprodserv','par.codigopartida','u.nombreumedida','d.cantidad','d.subtotal','d.precio')
         //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> where('d.idcompra','=', $id)-> get();        

        $valor_total = $prodserv->sum('subtotal');
        $valor_total2=NumerosEnLetras::convertir($valor_total,'Bolivianos',true);
      // dd($valor_total2);


       //echo 'Formato #1 ' . NumerosEnLetras::convertir(1988208.99) . '<br>';
        
       // echo 'Formato #2 ' . NumerosEnLetras::convertir(1988208.99,'Bolivianos',false,'Centavos') . '<br>';
        
        //echo 'Formato #3 ' . NumerosEnLetras::convertir(1988208.99,'Bolivianos',true) . '<br>';

       return view('compras.detalle.cotizacion',['valor_total2'=>$valor_total2,'prodserv'=>$prodserv,'valor_total'=>$valor_total,'ordencompra'=>$ordencompra,'ordendoc'=>$ordendoc,'responsables'=>$responsables,'fechaInvitacion'=>$fechaInvitacion,'fechaAceptacion'=>$fechaAceptacion,'fechaorden'=>$fechaorden]);   
      // return view('compras.detalle.cotizacion');
    }

    //---------------------------------------------------
    //---------------------------------------------------


    public function adjudicacion($id)
    {

        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.numinforme','o.fechaorden','o.nombrecompra','o.solicitante','o.modalidadcontratacion',
        'o.precioreferencial','o.proveedor','o.representante','o.cedula','o.nitci','o.telefono',
        'o.approgramatica','o.partida','o.actividad','o.nordencompra','o.npreventivo',
        'o.hojaruta','o.numcontrolinterno','o.plazoentrega','o.fechainicio',
        'o.fechaconclusion','o.fechainvitacion','o.fechaaceptacion','o.codciteinvitacion',
        'o.horapresentacion', 'o.cedulaaceptacion','o.numnotaadjudicacion','o.fechainiciosolproc',
        'o.controlinter','o.autoridadsolicitante')
        -> where('o.compra_idcompra','=', $id)->first();


        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $fechaInvitacion =$ordencompra->fechainvitacion;
        $fechaInvitacion = Carbon::parse($fechaInvitacion)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechaAceptacion =$ordencompra->fechaaceptacion;
        $fechaAceptacion = Carbon::parse($fechaAceptacion)->isoFormat('D \d\e MMMM \d\e\l Y');
        $responsables = DB::table('responsables')->first();


        $fechaorden =$ordencompra->fechaorden;
        $fechaorden = Carbon::parse($fechaorden)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechainiciosolici =$ordencompra->fechainiciosolproc;
        $fechainiciosolici = Carbon::parse($fechainiciosolici)->isoFormat('D \d\e MMMM');


        // tomar en cuenta $compra = CompraModel::find($id2);
        $prodserv = DB::table('detallecompra as d') 
        ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
        ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
        ->join('partida as par', 'par.idpartida', '=', 'ps.partida_idpartida')
        ->join('umedida as u', 'u.idumedida', '=', 'ps.umedida_idumedida')
        ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','ps.detalleprodserv','par.codigopartida','u.nombreumedida','d.cantidad','d.subtotal','d.precio')
         //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> where('d.idcompra','=', $id)-> get();        

        $valor_total = $prodserv->sum('subtotal');
        $responsables = DB::table('responsables')->first();
       // dd($prodserv);

       return view('compras.detalle.adjudicacion',['responsables'=>$responsables,'prodserv'=>$prodserv,'valor_total'=>$valor_total,'fechainiciosolici'=>$fechainiciosolici,'ordencompra'=>$ordencompra,'ordendoc'=>$ordendoc,'responsables'=>$responsables,'fechaInvitacion'=>$fechaInvitacion,'fechaAceptacion'=>$fechaAceptacion,'fechaorden'=>$fechaorden]);   
           
       //return view('compras.detalle.adjudicacion');
    }

    //---------------------------------------------------
    //---------------------------------------------------
    public function orden($id)
    {
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.numinforme','o.fechaorden','o.nombrecompra','o.solicitante','o.modalidadcontratacion',
        'o.precioreferencial','o.proveedor','o.representante','o.cedula','o.nitci','o.telefono',
        'o.approgramatica','o.partida','o.actividad','o.nordencompra','o.npreventivo',
        'o.hojaruta','o.numcontrolinterno','o.plazoentrega','o.fechainicio',
        'o.fechaconclusion','o.fechainvitacion','o.fechaaceptacion','o.codciteinvitacion',
        'o.horapresentacion', 'o.cedulaaceptacion','o.numnotaadjudicacion','o.fechainiciosolproc',
        'o.controlinter','o.autoridadsolicitante')
        -> where('o.compra_idcompra','=', $id)->first();


        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $fechaInvitacion =$ordencompra->fechainvitacion;
        $fechaInvitacion = Carbon::parse($fechaInvitacion)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechaAceptacion =$ordencompra->fechaaceptacion;
        $fechaAceptacion = Carbon::parse($fechaAceptacion)->isoFormat('D \d\e MMMM \d\e\l Y');
        $responsables = DB::table('responsables')->first();


        $fechaorden =$ordencompra->fechaorden;
        $fechaorden = Carbon::parse($fechaorden)->isoFormat('D \d\e MMMM \d\e\l Y');

        $fechainiciosolici =$ordencompra->fechainiciosolproc;
        $fechainiciosolici = Carbon::parse($fechainiciosolici)->isoFormat('D \d\e MMMM');


        // tomar en cuenta $compra = CompraModel::find($id2);
        $prodserv = DB::table('detallecompra as d') 
        ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
        ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
        ->join('partida as par', 'par.idpartida', '=', 'ps.partida_idpartida')
        ->join('umedida as u', 'u.idumedida', '=', 'ps.umedida_idumedida')
        ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','ps.detalleprodserv','par.codigopartida','u.nombreumedida','d.cantidad','d.subtotal','d.precio')
         //-> where('nombreumedida','LIKE','%'.$querry.'%') 
        -> where('d.idcompra','=', $id)-> get();        

        $valor_total = $prodserv->sum('subtotal');
        $valor_total2=NumerosEnLetras::convertir($valor_total,'Bolivianos',true);
        $responsables = DB::table('responsables')->first(valor_total2);
       // dd($prodserv);

       return view('compras.detalle.orden',['valor_total2'=>$valor_total2,'responsables'=>$responsables,'prodserv'=>$prodserv,'valor_total'=>$valor_total,'fechainiciosolici'=>$fechainiciosolici,'ordencompra'=>$ordencompra,'ordendoc'=>$ordendoc,'responsables'=>$responsables,'fechaInvitacion'=>$fechaInvitacion,'fechaAceptacion'=>$fechaAceptacion,'fechaorden'=>$fechaorden]);   
        

       //return view('compras.detalle.orden');
    }


    //---------------------------------------------------
    //---------------------------------------------------

    public function crearOrdenxxx($id)
    {

        $compras = DB::table('compra as c') 
        ->join('proveedores as p', 'p.idproveedor', '=', 'c.idproveedor')
        ->join('catprogramatica as cat', 'cat.idcatprogramatica', '=', 'c.idcatprogramatica')
        ->join('programa as prog', 'prog.idprograma', '=', 'c.idprograma')
        ->join('areas as a', 'a.idarea', '=', 'c.idarea')
        ->select('c.idcompra','a.nombrearea','c.objeto', 'c.justificacion', 'c.preventivo','p.nombreproveedor','p.representante','p.cedula','p.nitci','p.telefonoproveedor','c.preventivo','c.numcompra','cat.codcatprogramatica','prog.nombreprograma')
        -> where('c.idcompra','=', $id)->first();
      
       $prodserv = DB::table('detallecompra as d') 
       ->join('prodserv as ps', 'ps.idprodserv', '=', 'd.idprodserv')
       ->join('compra as c', 'c.idcompra', '=', 'd.idcompra')
       ->select('d.iddetallecompra', 'c.idcompra','ps.nombreprodserv','d.cantidad','d.subtotal','d.precio')
       //-> where('nombreumedida','LIKE','%'.$querry.'%') 
       -> where('d.idcompra','=', $id)->get();
       
       $subtotal = $prodserv->sum('subtotal');


        //$compras1=$compras1->objeto;     
       // dd($valor_total);
       //$docordens = DocOrdenModel::all()->pluck('nombredoc');
         return view('compras.detalle.principal',['compras'=>$compras,'subtotal'=>$subtotal,'idcompra'=>$id]);
        // return view('compras.detalle.principal', compact('compras','subtotal'));
         //return view('compras.detalle.principal');
    }




    //---------------------------------------------------
    //---------------------------------------------------

    
    public function crearorden(Request $request)
    {


        //dd($request->all());
        $id= $request->idcompra;
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.nombrecompra','o.solicitante','o.proveedor')
        -> where('o.compra_idcompra','=', $id)->first();
       
        $resultado=$ordencompra;

        if(is_null($resultado))
        
            {

       $ordencompra = new OrdenCompraModel();
       $ordencompra -> numinforme = $request->input('informe');
       $ordencompra -> fechaorden =$request->input('fechaOden');
       $ordencompra -> nombrecompra =$request->input('objeto');
       $ordencompra -> solicitante =$request->input('solicitante');
       $ordencompra -> modalidadcontratacion =$request->input('modalidad');
       $ordencompra -> precioreferencial =$request->input('subtotal');
       $ordencompra -> proveedor =$request->input('proveedor');
       $ordencompra -> representante =$request->input('representante');
       $ordencompra -> cedula =$request->input('cedula');
       $ordencompra -> nitci =$request->input('nit');
       $ordencompra -> telefono =$request->input('telefono');
       $ordencompra -> approgramatica =$request->input('apertura');
       $ordencompra -> partida =$request->input('partida');
       $ordencompra -> actividad =$request->input('actitividad');
       $ordencompra -> nordencompra =$request->input('orden');
       $ordencompra -> npreventivo =$request->input('preventivo');
       $ordencompra -> hojaruta =$request->input('ruta');
       $ordencompra -> numcontrolinterno =$request->input('Cinterno');
       $ordencompra -> plazoentrega =$request->input('entrega');
       $ordencompra -> fechainicio =$request->input('fechainicio');
       $ordencompra -> fechaconclusion =$request->input('fechaconclusion');
       $ordencompra -> fechainvitacion =$request->input('fechainvitacion');
       $ordencompra -> fechaaceptacion =$request->input('fechaaceptacion');
       $ordencompra -> codciteinvitacion =$request->input('codigocite');
       $ordencompra -> horapresentacion =$request->input('horapresentacion');
       $ordencompra -> cedulaaceptacion =$request->input('cedulaaceptacion');
       $ordencompra -> numnotaadjudicacion =$request->input('notaadjudicacion');
       $ordencompra -> fechainiciosolproc =$request->input('fechainiciosoli');
       $ordencompra -> controlinter =$request->input('controlinterno');
       $ordencompra -> autoridadsolicitante =$request->input('solicitante');
     
       $ordencompra -> compra_idcompra = $id;
              
       $ordencompra->save();
             }
           
        //$compras1=$compras1->objeto;     
        // dd($valor_total);
        //$docordens = DocOrdenModel::all()->pluck('nombredoc');
        // return view('compras.detalle.principal',['compras'=>$compras,'subtotal'=>$subtotal]);
        // return view('compras.detalle.principal', compact('compras','subtotal'));
        //return view('compras.detalle.principal');
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.nombrecompra','o.solicitante','o.proveedor','o.fechaorden')
        -> where('o.compra_idcompra','=', $id)->get();
        


        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $docorden= DB::table('docorden as doc') 
        ->select('doc.nombredoc','doc.iddoc')
        -> where('doc.estadodoc','=', 1)->get();

         
         return view('compras.detalle.principalorden', compact('ordencompra','id','ordendoc','docorden'));

    }

         

        //---------------------------------------------------
        //---------------------------------------------------
      
        public function crearOrdendoc(Request $request)
        {
        //dd($request->all());
        $id= $request->idcompra;
                    
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.nombrecompra','o.solicitante','o.proveedor','o.fechaorden')
        -> where('o.compra_idcompra','=', $id)->get();
        
       

        $docorden= DB::table('docorden as doc') 
        ->select('doc.nombredoc','doc.iddoc')
        -> where('doc.estadodoc','=', 1)->get();

        $ordencompra2 = DB::table('ordencompra as o') 
        ->select('o.idorden','o.nombrecompra','o.solicitante','o.proveedor','o.fechaorden')
        -> where('o.compra_idcompra','=', $id)->first();
        //dd($ordencompra2);
        $idordencompra=$ordencompra2->idorden;

        

        $ordendoccreate=new OrdenDocModel;

       $ordendoccreate -> iddoc =$request->input('iddoc');
       $ordendoccreate -> idorden =$idordencompra;
                     
       $ordendoccreate->save();

       $ordendoc= DB::table('ordencompra as o') 
       ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
       ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
       ->select('doc.nombredoc')
       -> where('o.compra_idcompra','=', $id)->get();

        //return view('compras/detalle/principalorden', compact('ordencompra','id','ordendoc','docorden','idordencompra'));
        return back();
         }

         //-----------------------------------------------
         //-----------------------------------------------\


         public function crearOrdendocxx($id)
        {
        //dd($id);
        //$id= $request->idcompra;
                    
        $ordencompra = DB::table('ordencompra as o') 
        ->select('o.nombrecompra','o.solicitante','o.proveedor','o.fechaorden')
        -> where('o.compra_idcompra','=', $id)->get();

        $ordencompra2 = DB::table('ordencompra as o') 
        ->select('o.idorden','o.nombrecompra','o.solicitante','o.proveedor','o.fechaorden')
        -> where('o.compra_idcompra','=', $id)->first();

        $idordencompra=$ordencompra2->idorden;
        //dd($idordencompra);
        $ordendoc= DB::table('ordencompra as o') 
        ->join('ordendoc as od', 'od.idorden', '=', 'o.idorden')
        ->join('docorden as doc', 'doc.iddoc', '=', 'od.iddoc')
        ->select('od.idordendoc','doc.nombredoc')
        -> where('o.compra_idcompra','=', $id)->get();

        $docorden= DB::table('docorden as doc') 
        ->select('doc.nombredoc','doc.iddoc')
        -> where('doc.estadodoc','=', 1)->get();
        //dd($ordendoc);
        return view('compras/detalle/principalorden', compact('ordencompra','id','ordendoc','docorden','idordencompra'));
        //return redirect('principalorden');
         }





    //---------------------------------------------------
    //---------------------------------------------------

    public function edit($id)
    {
        //xdffdfdfdfdfdf
    }

   
    //---------------------------------------------------
    //---------------------------------------------------

    public function update(Request $request, $id)
    {
        //
    }


    //---------------------------------------------------
    //---------------------------------------------------


         
    public function create()
    {
        
    
        //dd($areas);
       //return view('compras.pedido.create', ["proveedores" => $proveedores,"areas" => $areas,"catprogramaticas" => $catprogramaticas,"programas" => $programas]);
       // return view("compras.detalle.create");
    }

    //---------------------------------------------------
    //---------------------------------------------------

    public function destroy($id)
    {
 
        $detalle = DetalleCompraModel::find($id);
        $detalle->delete();
    
        //dd($detalle);
        return redirect('compras/detalle');
      
    }

    public function destroyed2($id)
    {
 
        $ordendoc = OrdenDocModel::find($id);
        $ordendoc->delete();
    
        //dd($detalle);
        //return redirect('compras/detalle');
      return back();
    }
}