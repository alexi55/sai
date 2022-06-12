@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div style="color:#009EFB;font-weight: bold;font-size: 18px;">Modulo de Productos-Items
            &nbsp;&nbsp;
            @can('productos_create')
            <a href="{{ route('productos.create') }}" class="btn btn-outline-info">Agregar</a>
            @endcan
        </div>
        </br></br></br>
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Lista de Productos - Items</div>

                <div class="card-body">
                    <table class="table table-bordered  yajra-datatable hoverTable">
                        <thead bgcolor="#009EFB">
                            <tr>
                                <th style="color:black">N°</th>
                                <th style="color:black">Nombre</th>
                                <th style="color:black">Detalle</th>

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
</div>
@section('scripts')

<script type="text/javascript">
$(function() {

    var table = $('.yajra-datatable').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },

        processing: true,
        serverSide: true,
        ajax: "{{ route('producto.list') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'nombreprodserv',
                name: 'nombreprodserv'
            },
            {
                data: 'detalleprodserv',
                name: 'detalleprodserv'
            },

            {
                data: 'btn',
                name: 'btn',
                orderable: true,
                searchable: true
            },
        ]


    });



});
</script>

@endsection
@endsection