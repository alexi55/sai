@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Areas') }}</div>

    <div class="card-body table-responsive">
        @can('areas_create')
        <a href="{{ route('areas.create') }}" class="btn btn-outline-primary">Agregar Registro</a>
        @endcan

        <br /><br />

        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">
                <th>ID</th>
                <th>Nombres </th>
                <th>Opciones</th>

            </tr>
            @forelse ($areas as $area)
            <tr>
                <td>{{$area -> idarea}}</td>
                <td>{{$area -> nombrearea}}</td>


                <td>

                    @can('areas_edit')
                    <a href="areas/{{$area -> idarea}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($areas->total() > $areas->perPage())
        <br><br>
        {{$areas->links()}}
        @endif



    </div>
</div>

@endsection