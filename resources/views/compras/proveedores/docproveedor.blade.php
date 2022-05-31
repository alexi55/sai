@extends('layouts.admin')

@section('content')

<div class="card col-md-10">
    <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Lista de Documentos') }}</div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/proveedores') }}" class="btn blue darken-4 text-black "><i style="color:#55CE63;font-weight: bold;"
                        class="fa fa-plus-square"></i > Volver atras</a>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive">

    @can('proveedores_create')
    <a href="{{ route('ProveedoresController.createdoc', $idproveedor) }}" class="btn btn-outline-warning">Agregar Nuevo Documento</a>
        @endcan

        <br /><br />


        <table class="table  table-hover">
            <tr class="bg-info text-light">

                <th>ID</th>
                <th>Nombre del Documento</th>
                <th>Documento</th>
                <th>Opciones</th>


            </tr>
            @forelse ($docproveedor as $docprov)
            <tr>

                <td style="color:#0098CA;">{{$docprov -> iddocproveedor}}</td>
                <td style="color:#0098CA;">{{$docprov -> nombredocumento}}</td>
                <td style="color:#0098CA;">{{$docprov -> documento}}</td>
               

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