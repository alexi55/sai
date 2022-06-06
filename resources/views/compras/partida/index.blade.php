@extends('layouts.admin')

@section('content')

<div style="color:#009EFB;font-weight: bold;font-size: 18px;">Modulo de Partidas 
&nbsp;&nbsp; </div>

</br>

<div class="card col-md-12">

    </br>



    <table class="table table-bordered  yajra-datatable">
        <thead bgcolor="#71D799">
            <tr>
                <th style="color:white">N°</th>
                <th style="color:white">Codigo</th>
                <th style="color:white">Nombre</th>
                <th style="color:white">Detalle</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
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
        ajax: "{{ route('partida.list') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },

            {
                data: 'codigopartida',
                name: 'codigopartida'
            },

            {
                data: 'nombrepartida',
                name: 'nombrepartida'
            },

            {
                data: 'detallepartida',
                name: 'detallepartida'
            },

           
        ]



    });


});
</script>

@endsection

@endsection
