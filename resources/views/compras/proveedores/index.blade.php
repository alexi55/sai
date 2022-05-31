@extends('layouts.admin')

@section('content')

<div class="card col-md-12">
    <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Modulo de Proveedores') }}</div>

    <div class="card-body table-responsive">

        @can('proveedores_create')
        <a href="{{ route('proveedores.create') }}"  class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Permite agregar un nuevo registro">Agregar Registro</a>
        @endcan

        <br /><br />


        <table class="table  table-hover">
            <tr class="bg-info text-light">

                <th>Id</th>
                <th>Nombre Proveedor</th>
                <th>Representante</th>
                <th>Cedula</th>
                <th>Nit</th>
                <th>Telefono</th>
                <th>Opciones</th>


            </tr>
            @forelse ($proveedores as $proveed)
            <tr>

                <td style="color:#0098CA;">{{$proveed -> idproveedor}}</td>
                <td style="color:#0098CA;">{{$proveed -> nombreproveedor}}</td>
                <td style="color:#0098CA;">{{$proveed -> representante}}</td>
                <td style="color:#0098CA;">{{$proveed -> cedula}}</td>
                <td style="color:#0098CA;">{{$proveed -> nitCi}}</td>
                <td style="color:#0098CA;">{{$proveed -> telefonoproveedor}}</td>


                <td>
                    @can('proveedores_edit')
                    <a href="proveedores/{{$proveed -> idproveedor}}/edit" class="btn btn-outline-warning " data-toggle="tooltip" data-placement="top" title="Permite editar el registro seleccionado">Editar</a>
                    @endcan
                    @can('proveedores_edit')
                    <a href="{{route('admin.users.edit', $proveed -> idproveedor)}}" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Permite cargar documentos del proveedor">Documentos</a>
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