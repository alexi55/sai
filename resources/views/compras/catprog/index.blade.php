@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
 
    <div class="col-md-10">
    </br>
    <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Categ. Programaticas
        &nbsp;&nbsp;
        @can('medidas_create')
        <a href="{{ route('catprog.create') }}" class="btn btn-outline-info btn-sm">Agregar</a>
        @endcan
    </div>
    </br>
        <div class="card">


            <div class="card-body">
            <font size="2" face="Courier New" >
                <table class="table table-bordered yajra-datatable hoverTable">
                    <thead>
                        <tr>
                            <th style="color:black;width:20px;">N°</th>
                            <th style="color:black">Codigo</th>
                            <th style="color:black">Nombre</th>
                            <th style="color:black;width:50px;">Opciones</th>
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
        ajax: "{{ route('catprog.list') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'codcatprogramatica',
                name: 'codcatprogramatica'
            },
            {
                data: 'nombrecatprogramatica',
                name: 'nombrecatprogramatica'
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