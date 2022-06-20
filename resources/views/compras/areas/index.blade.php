@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
    <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Areas
&nbsp;&nbsp;

@can('medidas_create')
<a href="{{ route('areas.create') }}" class="btn btn-outline-info">Agregar</a>
@endcan</div>
</br></br></br>
        <div class="col-md-10">
            <div class="card">
              

                <div class="card-body">
                <table class="table table-bordered yajra-datatable hoverTable">
        <thead >
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

@section('scripts')

<script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({
language: {
    url: '/sai/public/spain.json'
    },

        processing: true,
        serverSide: true,
        ajax: "{{ route('areas.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nombrearea', name: 'nombrearea'},
                      
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

