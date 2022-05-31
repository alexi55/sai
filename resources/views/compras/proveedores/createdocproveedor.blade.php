@extends('layouts.admin')

@section('content')

<div class="card col-md-10">
    <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Agregar Documento') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/proveedores') }}" class="btn blue darken-4 text-black "><i style="color:#55CE63;font-weight: bold;"
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('ProveedoresController.insertar') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" class="form-control" name="proveedor" placeholder="" value="{{$idproveedor}}">


           

            <div class="form-group row">
                <label for="nombre" style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Nombre del Documento') }}</label>

                <div class="col-md-6">
                    <input type="text" name="nombredocumento" class="form-control" placeholder="Nombre..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label for="documento" style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Archivo (solo .pdf)') }}</label>

                <div class="col-md-6">
                    <input type="file" name="documento" id="file">
                </div>
            </div>


            <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-outline-success">
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>

@endsection