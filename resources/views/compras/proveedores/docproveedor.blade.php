@extends('layouts.admin')

@section('content')

<div class="card col-md-10">
    <div class="card-header">{{ __('Lista de Documentos') }}</div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/proveedores') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive">

    @can('proveedores_create')
    <a href="{{ route('ProveedoresController.createdoc', $idproveedor) }}" class="btn btn-outline-warning">Agregar Nuevo Documento</a>
        @endcan

        <br /><br />


        <table class="table table-borderless table-hover">
            <tr class="bg-info text-light">

                <th>ID</th>
                <th>Nombre del Documento</th>
                <th>Documento</th>
                <th>Opciones</th>


            </tr>
            @forelse ($docproveedor as $docprov)
            <tr>

                <td>{{$docprov -> iddocproveedor}}</td>
                <td>{{$docprov -> nombredocumento}}</td>
                <td>{{$docprov -> documento}}</td>
               

                <td>
                    @can('proveedores_edit')
                    <a href="/sai/public/Archivos/{{$docprov -> documento}}" target="blank_" class="btn btn-outline-warning">Ver Documento</a>
                    @endcan

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>


      


    </div>
</div>

@endsection