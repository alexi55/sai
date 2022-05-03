@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Partidas') }}</div>

    <div class="card-body table-responsive">


  

        @include('compras.partida.search')

        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">
                <th class="text-center">Codigo</th>
                <th>Nombre</th>
                <th>Detalle</th>
               
            </tr>
            @forelse ($partidas as $par)
            <tr>
                <td class="text-center">{{$par -> codigopartida}}</td>
                <td>{{$par -> nombrepartida}}</td>
                <td>{{$par -> detallepartida}}</td>


             
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($partidas->total() > $partidas->perPage())
        <br><br>
        {{$partidas->links()}}
        @endif



    </div>
</div>

@endsection
