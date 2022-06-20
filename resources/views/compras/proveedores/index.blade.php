@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Proveedores
            &nbsp;&nbsp;
            @can('proveedores_create')
            <a href="{{ route('proveedores.create') }}" class="btn btn-outline-info">Agregar</a>
            @endcan
        </div>
        </br></br></br>

        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body">

                    <table class="table table-bordered yajra-datatable hoverTable">
                        <thead >
                            <tr>
                                <th style="color:black">N°</th>
                                <th style="color:black">Nombre Proveedor</th>
                                <th style="color:black">Representante</th>
                                <th style="color:black">Cedula</th>
                                <th style="color:black">Nit/Ci</th>
                                <th style="color:black">Telefono</th>
                                <th style="color:black">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

@section('scripts')

<script type="text/javascript">
$(function() {

    var table = $('.yajra-datatable').DataTable({
        language: {
            url: '/sai/public/spain.json'
        },

        processing: true,
        serverSide: true,
        ajax: "{{ route('proveedores.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nombreproveedor', name: 'nombreproveedor'},
            {data: 'representante', name: 'representante'},
            {data: 'cedula', name: 'cedula'},
            {data: 'nitCi', name: 'nitCi'},
            {data: 'telefonoproveedor', name: 'telefonoproveedor'},

            {data: 'btn', name: 'btn', orderable: true, searchable: true },
        ]

    });

});
</script>

@endsection
@endsection