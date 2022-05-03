<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartidaModel;
use App\Models\ProdServModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;


class ProdServController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
              //obtener las partidas

        $query=trim($request->get('searchText'));
        $query2=trim($request->get('searchText2'));
        $query3=trim($request->get('searchText3'));
       $productos = DB::table('prodserv as ps') 
       ->join('partida as p', 'p.idpartida', '=', 'ps.partida_idpartida')
       ->join('umedida as u', 'u.idumedida', '=', 'ps.umedida_idumedida')
       ->select('ps.idprodserv','ps.nombreprodserv','ps.detalleprodserv','ps.precioprodserv', 'p.codigopartida','u.nombreumedida')
       ->where('ps.nombreprodserv','LIKE','%'.$query.'%')
        ->where('ps.detalleprodserv','LIKE','%'.$query2.'%')
        ->where('p.codigopartida','LIKE','%'.$query3.'%')
       -> where('ps.estadoprodserv','=', 1)
       -> orderBy('ps.idprodserv', 'desc')
       -> paginate(10);
       //dd($productos);
      return view('compras.productos.index', ["productos" => $productos]);
      //return view('compras.productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partidas = DB::table('partida')->get();
        $medidas = DB::table('umedida')->get();
        return view('compras.productos.create', ["partidas" => $partidas,"medidas" => $medidas]);
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
        $productos = new ProdservModel();
        $productos -> nombreprodserv = $request->input('nombre');
            $productos -> detalleprodserv = $request->input('detalle');
            $productos -> precioprodserv = $request->input('precio');
            $productos -> umedida_idumedida =$request->input('idmedida');
            $productos -> partida_idpartida = $request->input('idpartida');
        
        $productos -> estadoprodserv = 1;
      
      
        if($productos->save()){
            $request->session()->flash('message', 'Registro Procesado');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Error al Procesar Registro');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('productos.index');
      
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
    public function edit($idprod){
        $productos = ProdservModel::find($idprod);
        $partidas = DB::table('partida')->get();
        $medidas = DB::table('umedida')->get();
        //dd($medidas);
        return view('compras.productos.edit', ["productos" => $productos,"partidas" => $partidas,"medidas" => $medidas]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproductos){

        //$medidas = MedidaModel::find($idmedida);
        //$partidas = PartidaModel::find($idpartida);
        $productos = ProdservModel::find($idproductos);
        $productos -> nombreprodserv = $request->input('nombre');
        $productos -> detalleprodserv = $request->input('detalle');
        $productos -> precioprodserv = $request->input('precio');
        $productos -> umedida_idumedida =$request->input('idmedida');
        $productos -> partida_idpartida = $request->input('idpartida');
    
        //$medida->update();
        if($productos->save()){
          $request->session()->flash('message', 'Registro Procesado');
      }else{
          $request->session()->flash('message', 'Error al Procesar Registro');
      }
        return redirect('compras/productos');
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
