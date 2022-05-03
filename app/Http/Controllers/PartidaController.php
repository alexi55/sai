<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartidaModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;


class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

     
        $query=trim($request->get('searchText'));
          $query2=trim($request->get('searchText2'));
          $query3=trim($request->get('searchText3'));
             //obtener las partidas
             $partidas = DB::table('partida') 
             ->where('codigopartida','LIKE','%'.$query.'%')
             ->where('nombrepartida','LIKE','%'.$query2.'%')
             ->where('detallepartida','LIKE','%'.$query3.'%')
             -> where('estadopartida','=', 1)
             -> orderBy('idpartida', 'asc')
             -> paginate(10);
             
             
             return view('compras.partida.index', compact('partidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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