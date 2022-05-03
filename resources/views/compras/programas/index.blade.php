@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Programas') }}</div>

    <div class="card-body table-responsive">

        @can('programas_create')
        <a href="{{ route('programas.create') }}" class="btn btn-outline-primary">Agregar Registro</a>
        @endcan

        <br /><br />

        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">
                <th>ID</th>
                <th>Nombre </th>
                <th>Opciones</th>

            </tr>
            @forelse ($programas as $prog)
            <tr>
                <td>{{$prog -> idprograma}}</td>
                <td>{{$prog -> nombreprograma}}</td>


                <td>
                    @can('programas_edit')
                    <a href="programas/{{$prog -> idprograma}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan


                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($programas->total() > $programas->perPage())
        <br><br>
        {{$programas->links()}}
        @endif



    </div>
</div>

@endsection