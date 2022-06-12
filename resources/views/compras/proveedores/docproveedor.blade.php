@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Documentos del Proveedor</div>
                </br>
                <div class="row">
                    <a href="{{ url('/compras/proveedores/index') }}" class="btn blue darken-4 text-black "><i
                            style="color:#55CE63;font-weight: bold;" class="fa fa-plus-square"></i> Volver atras</a>

                    @can('proveedores_create')
                    <a href="{{ route('ProveedoresController.createdoc', $idproveedor) }}"
                        class="btn btn-outline-warning">Agregar</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
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
                                <a href="/sai/public/Archivos/{{$docprov -> documento}}" target="blank_"
                                    class="btn btn-outline-warning">Ver Documento</a>
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
        </div>
    </div>
</div>
@endsection