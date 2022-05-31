@extends('layouts.admin')

@section('content')

<div class="card col-md-10">
    <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Modulo Categorias Programaticas') }}</div>

    <div class="card-body table-responsive">

        @can('catprog_create')
        <a href="{{ route('catprog.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Permite agregar un nuevo registro">Agregar Registro</a>
        @endcan

        <br /><br />

        <table class="table  table-hover">
            <tr class="bg-info text-light">
                <th>Id</th>
                <th>Codigo </th>
                <th>Nombre </th>
                <th>Opciones</th>

            </tr>
            @forelse ($catprogs as $catprog)
            <tr>
                <td style="color:#0098CA;">{{$catprog -> idcatprogramatica}}</td>
                <td style="color:#0098CA;">{{$catprog -> codcatprogramatica}}</td>
                <td style="color:#0098CA;">{{$catprog -> nombrecatprogramatica}}</td>


                <td>

                    @can('catprog_edit')
                    <a href="catprog/{{$catprog -> idcatprogramatica}}/edit" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Permite editar el registro seleccionado">Editar</a>
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