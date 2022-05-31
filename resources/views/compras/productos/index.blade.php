@extends('layouts.admin')

@section('content')

<div class="card col-md-12">
    <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Modulo de Productos') }}</div>

    <div class="card-body table-responsive">
        @can('productos_create')
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar Registro</a>

        @endcan


        <br /><br />
        @include('compras.productos.search')

        <table class="table  table-hover">
            <tr class="bg-info text-light">
                <th class="text-center">ID</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Medida</th>
                <th>Partida</th>
                <th>Precio</th>
                <th>Opciones</th>

            </tr>
            @forelse ($productos as $prod)
            <tr>
                <td class="text-center">{{$prod -> idprodserv}}</td>
                <td>{{$prod -> nombreprodserv}}</td>
                <td>{{$prod -> detalleprodserv}}</td>
                <td>{{$prod -> nombreumedida}}</td>
                <td>{{$prod -> codigopartida}}</td>
                <td>{{$prod -> precioprodserv}}</td>

                <td>
                    @can('productos_edit')
                    <a href="productos/{{$prod -> idprodserv}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan


                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($productos->total() > $productos->perPage())
        <br><br>
        {{$productos->links()}}
        @endif



    </div>
</div>

@endsection