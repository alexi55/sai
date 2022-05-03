@extends('layouts.admin')

@section('content')

<div class="card col-md-10">
    <div class="card-header">{{ __('Lista de Proveedores') }}</div>

    <div class="card-body table-responsive">

        @can('proveedores_create')
        <a href="{{ route('proveedores.create') }}" class="btn btn-outline-primary">Agregar Registro</a>
        @endcan

        <br /><br />


        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">

                <th>ID</th>
                <th>Nombre Proveedor</th>
                <th>Nit</th>
                <th>Telefono</th>
                <th>Opciones</th>


            </tr>
            @forelse ($proveedores as $proveed)
            <tr>

                <td>{{$proveed -> idproveedor}}</td>
                <td>{{$proveed -> nombreproveedor}}</td>
                <td>{{$proveed -> nitproveedor}}</td>
                <td>{{$proveed -> telefonoproveedor}}</td>


                <td>
                    @can('proveedores_edit')
                    <a href="proveedores/{{$proveed -> idproveedor}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($proveedores->total() > $proveedores->perPage())
        <br><br>
        {{$proveedores->links()}}
        @endif



    </div>
</div>

@endsection