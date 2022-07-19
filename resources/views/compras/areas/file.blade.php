@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    
   
    <div class="col-md-12"> 


    </br>
    <div style="color:black;font-weight: bold;font-size: 18px;">Modulo Files (Planta)
        &nbsp;&nbsp;

        @can('file_create_access')
        <a href="{{ route('areas.crearFile',$id) }}" class="btn btn-outline-info btn-sm">Agregar File</a>
        @endcan
    </div>
    </br>
        <div class="card">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/areas/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>
        </div>
            <div class="card-body">
            <font size="2" face="Courier New" >
        <table class="table table-bordered hoverTable">
            <tr>
            
                <th>Num.File</th>
                <th>Cargo</th>
                <th>Nombre Cargo</th>
                <th>Hab.Basico</th>
                <th>Categoria</th>
                <th>Niv.Adm.</th>
                <th>Clase</th>
                <th>Niv.Sal.</th>
                <th>Area</th>
                <th>Estado</th>
                <th>Opciones</th>

            </tr>
            @forelse ($file as $files)
            <tr>
           
                <td>{{ $files -> numfile}}</td>
                <td>{{ $files -> cargo}}</td>
                <td>{{ $files -> nombrecargo}}</td>
                <td>{{ $files -> habbasico}}</td>
                <td>{{ $files -> categoria}}</td>
                <td>{{ $files -> niveladm}}</td>
                <td>{{ $files -> clase}}</td>
                <td>{{ $files -> nivelsal}}</td>
                <td>{{ $files -> nombrearea}}</td>

                @if($files->estadofile == 1)
                                     
                     <td style="color:green;font-weight: bold;">Disponible</td>
                                         
                    @else
                    
                    <td style="color:red;font-weight: bold;">Ocupado</td>
                   
                    @endif




                <td>
                    @can('file_edit_access')
                    <a href="{{ route('file.edit', $files->idfile)}}"
                                        class="btn btn-outline-info btn-sm">Editar</a>
                    @endcan





                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse
        </table>

        </font>

        @if($file->total() > $file->perPage())
        <br><br>
        {{$file->links()}}
        @endif



        </div>
        </div>
    </div>
</div>

@endsection