@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        

        <div class="col-md-12">
        </br>
        <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Proveedores
            &nbsp;&nbsp;
            @can('proveedores_create')
            <a href="{{ route('proveedores.create') }}" class="btn btn-outline-info btn-sm" >Agregar</a>
            @endcan
        </div>
        </br>
            <div class="card">
                

                <div class="card-body">
                <font size="2" face="Courier New" >
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
</font>

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
            {data: 'nitci', name: 'nitci'},
            {data: 'telefonoproveedor', name: 'telefonoproveedor'},

            {data: 'btn', name: 'btn', orderable: true, searchable: true },
        ]

    });

});
</script>

@endsection
@endsection