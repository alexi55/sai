@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div style="color:#009EFB;font-weight: bold;font-size: 18px;">Modulo de Medidas 
&nbsp;&nbsp;

@can('medidas_create')
<a href="{{ route('medidas.create') }}" class="btn btn-outline-info">Agregar</a>
@endcan</div>
</br></br></br>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de medidas</div>

                <div class="card-body">
                <table class="table table-bordered yajra-datatable hoverTable">
        <thead bgcolor="#009EFB">
            <tr>
                <th style="color:black;width:30px;">N°</th>
                <th style="color:black">Nombre</th>
                <th style="color:black;width:50px;">Opciones</th>
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
  $(function () {

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
        ajax: "{{ route('medidas.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nombreumedida', name: 'nombreumedida'},
                      
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

