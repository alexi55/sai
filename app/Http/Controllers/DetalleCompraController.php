<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\CompraModel;
use App\Models\TemporalModel;
use App\Models\ProdServModel;
use App\Models\DetalleCompraModel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

class DetalleCompraController extends Controller
{
        

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
 
        //$detallecompra = CompraModel::find($id2);
        //$detallecompra = CompraModel::all();
        //$venda_produtos = Venda_Produto::find($id);
        //dd($valor_total);
        return view('compras.detalle.index',['prodserv'=>$prodserv,'productos'=>$productos,'valor_total'=>$valor_total]);
    }

    ////////////////////////////////////////      

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
        
        }else{
        $request->session()->flash('message', 'El Item Ya existe en la Planilla');
        
        }
         return redirect('compras/detalle');
    }

    ////////////////////////////////////////
    
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


    ////////////////////////////

    public function invitacion($id)
    {
           
       return view('compras.detalle.invitacion');
    }

    //////////////////////////

    public function aceptacion($id)
    {
           
       return view('compras.detalle.aceptacion');
    }

    /////////////////////////

    public function cotizacion($id)
    {
           
       return view('compras.detalle.cotizacion');
    }

    ///////////////////////////


    public function adjudicacion($id)
    {
           
       return view('compras.detalle.adjudicacion');
    }

    ///////////////////////////////

    public function orden($id)
    {
           
       return view('compras.detalle.orden');
    }

    ////////////////////////////////
    public function edit($id)
    {
        //xdffdfdfdfdfdf
    }

   
    /////////////////////////////

    public function update(Request $request, $id)
    {
        //
    }


    /////////////////////////////////


         
    public function create()
    {
        
    
        //dd($areas);
       //return view('compras.pedido.create', ["proveedores" => $proveedores,"areas" => $areas,"catprogramaticas" => $catprogramaticas,"programas" => $programas]);
       // return view("compras.detalle.create");
    }

    ///////////////////////////////////////////

    public function destroy($id)
    {
 

        $detalle = DetalleCompraModel::find($id);
        $detalle->delete();
    
    
        //dd($detalle);
        return redirect('compras/detalle');
      
    }

    
}
