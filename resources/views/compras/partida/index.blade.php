@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Partidas</div>
    <div class="col-md-12">
        <div class="card">


            <div class="card-body">
            <font size="2" face="Courier New" >
                <table class="table table-bordered  yajra-datatable hoverTable">
                    <thead>
                        <tr>
                            <th style="color:black">N°</th>
                            <th style="color:black">Codigo</th>
                            <th style="color:black">Nombre</th>
                            <th style="color:black">Detalle</th>
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
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
}      ,

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