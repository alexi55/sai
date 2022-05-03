@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Empleados') }}</div>

    <div class="card-body table-responsive">

        @can('empleados_create')
        <a href="{{ route('empleados.create') }}" class="btn btn-outline-primary">Agregar Registro</a>
        @endcan


        <br /><br />
        @include('compras.empleados.search')
        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">
                <th>ID</th>
                <th>Nombres </th>
                <th>Apellidos</th>
                <th>CI</th>
                <th>Telefono</th>
                <th>Area</th>
                <th>Opciones</th>

            </tr>
            @forelse ($empleados as $emp)
            <tr>
                <td>{{$emp -> idemp}}</td>
                <td>{{$emp -> nombres}}</td>
                <td>{{$emp -> ap_pat}} {{$emp -> ap_mat}}</td>
                <td>{{$emp -> ci}}</td>
                <td>{{$emp -> telefono}}</td>
                <td>{{$emp -> nombrearea}}</td>

                <td>

                    @can('empleados_edit')
                    <a href="empleados/{{$emp -> idemp}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($empleados->total() > $empleados->perPage())
        <br><br>
        {{$empleados->links()}}
        @endif



    </div>
</div>

@endsection