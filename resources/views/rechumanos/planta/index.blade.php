@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Empleados Planta </div>
           
        </div>
        </div>
    <div class="panel-body">
        <table class="table table-bordered customers-table" id="customers-table">
            <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>nombre area</th>
             
            </tr>
            </thead>
        </table>
    </div>


@section('scripts')

    <script id="details-template" type="text/x-handlebars-template">
        @verbatim
        <div class="label label-info">{{ nombrearea }}</div>
        <table class="table details-table" id="purchases-{{idarea}}">
            <thead>
            <tr>
                <th>Id</th>
                <th>nombres</th>
                <th>Ap.Paterno</th>
                <th>Ap.Materno</th>
                <th>Cargo</th>
                <th>Nom.Cargo</th>
                <th>Hab.Basico</th>
                <th>Categoria</th>
                <th>Niv.Admin.</th>
                <th>Clase</th>
                <th>Niv.Salarial</th>
                <th>F.Ingreso</th>
                <th>Natallicio</th>
                <th>edad</th>
                <th>ci</th>
                <th>poai</th>
                <th>exp.Poai</th>
                <th>Opciones</th>
            </tr>
            </thead>
        </table>
        @endverbatim
    </script>

    <script>
      var template = Handlebars.compile($("#details-template").html());
      var table = $('#customers-table').DataTable({
      
        processing: true,
        serverSide: true,
       
        scrollY: true,
        ajax: '{{ route('planta.list') }}',
        columns: [
          {
            "className":      'details-control',
            "orderable":      false,
            "searchable":     false,
            "data":           null,
            "defaultContent": ''
          },
          { data: 'idarea', name: 'idarea' },
          { data: 'nombrearea', name: 'nombrearea' },
         
        ],
        order: [[1, 'asc']],


      // cambiar lenguaje a español

      language: {
        url: '/sai/public/spain.json'
    }
      

      });

      // Add event listener for opening and closing details
      $('#customers-table tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var tableId = 'purchases-' + row.data().idarea;

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(template(row.data())).show();
          initTable(tableId, row.data());
          console.log(row.data());
          tr.addClass('shown');
          tr.next().find('td').addClass('no-padding bg-gray');
        }
      });

      function initTable(tableId, data) {
        $('#' + tableId).DataTable({
          processing: true,
          serverSide: true,
          ajax: data.details_url,
          columns: [
            { data: 'idemp', name: 'idemp' },
            { data: 'nombres', name: 'nombres' },
            { data: 'ap_pat', name: 'ap_pat'},
            { data: 'ap_mat', name: 'ap_mat'},
            { data: 'cargo', name: 'cargo'},
            { data: 'nomcargo', name: 'nomcargo'},
            { data: 'habbasico', name: 'habbasico'},
            { data: 'categoria', name: 'categoria'},
            { data: 'nivadmin', name: 'nivadmin'},
            { data: 'clase', name: 'clase'},
            { data: 'nivsalarial', name: 'nivsalarial'},
            { data: 'fechingreso', name: 'fechingreso'},
            { data: 'natalicio', name: 'natalicio'},
            { data: 'edad', name: 'edad'},
            { data: 'ci', name: 'ci'},
            { data: 'poai', name: 'poai'},
            { data: 'exppoai', name: 'exppoai'},
            
            { data: 'btn', name: 'btn', orderable: true, searchable: false }
                       
           
          
          ],
          order: [[1, 'asc']],
           // cambiar lenguaje a español

      language: {
        url: '/sai/public/spain.json'
    }
        });
      }
    </script>
@endsection
@endsection