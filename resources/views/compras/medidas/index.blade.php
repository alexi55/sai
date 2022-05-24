@extends('layouts.admin')

@section('content')
@if(Session::has('message'))

<div class="alert alert-success">
    <em> {!! session('message') !!}</em>
</div>
@endif
<div class="card col-md-10">
    <div class="card-header">{{ __('Lista de Medidas') }}</div>

    <div class="card-body table-responsive">
        @can('medidas_edit')
        <a href="{{ route('medidas.create') }}" class="btn btn-outline-primary">Agregar Registro</a>
        @endcan

        <br /><br />

        @include('compras.medidas.search')

        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">

                <th>Nombre</th>
                <th>Opciones</th>

            </tr>
            @forelse ($medidas as $medida)
            <tr>

                <td>{{$medida->nombreumedida}}</td>


                <td>




                    @can('medidas_edit')
                    <a href="medidas/{{$medida -> idumedida}}/edit" class="btn btn-outline-warning">Editar</a>
                    @endcan
                    @can('medidas_delete')
                    <form action="{{ route('medidas.destroy', $medida -> idumedida) }}" class="d-inline-block"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Esta por dar de baja el Registro...esta seguro..?')"
                            class="btn btn-outline-danger">Eliminar</button>
                    </form>
                    @endcan
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


        @if($medidas->total() > $medidas->perPage())
        <br><br>
        {{$medidas->links()}}
        @endif



    </div>
</div>

@endsection