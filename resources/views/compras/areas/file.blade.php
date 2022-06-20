@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Lista de Files') }}</div>

    <div class="card-body table-responsive">

    <input type="text" class="form-control" name="nombre" placeholder=""
                        value="{{$id}}" >

      

        <table class="table table-bordered hoverTable">
            <tr>
                <th>Id</th>
                <th>Num File</th>
                <th>Sueldo</th>
                <th>Cargo File</th>
                <th>Area</th>
                <th>Opciones</th>

            </tr>
            @forelse ($file as $files)
            <tr>
                <td class="text-center">{{$files->idfile}}</td>
                <td>{{ $files -> numfile}}</td>
                <td>{{ $files -> sueldo}}</td>
                <td>{{ $files -> cargofile}}</td>
                <td>{{ $files -> nombrearea}}</td>



                <td>
                    @can('medidas_access')
                    <a href="" class="btn btn-outline-warning">Editar</a>
                    @endcan





                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>



        @if($file->total() > $file->perPage())
        <br><br>
        {{$file->links()}}
        @endif




    </div>
</div>

@endsection