@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Compras') }}</div>
 
    <div class="card-body table-responsive">
    
        <a href="{{ route('pedido.create') }}" class="btn btn-outline-primary">Agregar Compra</a>

        <br /><br />

        @include('compras.pedido.search')

        <table class="table table-borderless table-hover">
        <tr>
                    <th>Id</th>
                    <th>Area</th>
                    <th>Objeto</th>
                    <th >Proveedor</th>
                    <th>Preventivo</th>
                    <th>Num. Compra</th>
                    <th >Opciones</th>

                </tr>
            @forelse ($compras as $comp)
            <tr>
                <td class="text-center">{{$comp->idcompra}}</td>
                <td >{{ $comp -> nombrearea}}</td>
                <td >{{ $comp -> objeto}}</td>
                <td>{{ $comp -> nombreproveedor}}</td>
                <td>{{ $comp -> preventivo}}</td>
                <td>{{ $comp -> numcompra}}</td>


                <td>
                @can('medidas_access')
                <a href="pedido/{{$comp->idcompra}}/editar" class="btn btn-outline-warning">Editar</a>
                    @endcan
                    
                <a href="pedido/{{$comp->idcompra}}/edit" class="btn btn-outline-info">Items de la Compra</a>

               

                    
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($compras->total() > $compras->perPage())
        <br><br>
        {{$compras->links()}}
        @endif



    </div>
</div>

@endsection