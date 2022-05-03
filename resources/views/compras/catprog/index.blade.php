@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Cat. Programaticas') }}</div>

    <div class="card-body table-responsive">

        @can('catprog_create')
        <a href="{{ route('catprog.create') }}" class="btn btn-outline-primary">Agregar Registro</a>
        @endcan

        <br /><br />

        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">
                <th>ID</th>
                <th>Codigo </th>
                <th>Nombre </th>
                <th>Opciones</th>

            </tr>
            @forelse ($catprogs as $catprog)
            <tr>
                <td>{{$catprog -> idcatprogramatica}}</td>
                <td>{{$catprog -> codcatprogramatica}}</td>
                <td>{{$catprog -> nombrecatprogramatica}}</td>


                <td>

                    @can('catprog_edit')
                    <a href="catprog/{{$catprog -> idcatprogramatica}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($catprogs->total() > $catprogs->perPage())
        <br><br>
        {{$catprogs->links()}}
        @endif



    </div>
</div>

@endsection