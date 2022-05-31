@extends('layouts.admin')

@section('content')

<div class="card col-md-10">
    <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Editar Registro') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/proveedores') }}" class="btn blue darken-4 text-black "><i
                        style="color:#55CE63;font-weight: bold;" class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('proveedores.update', $proveedores->idproveedor) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="nombre" style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Nombre Proveedor') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nombre" placeholder=""
                        value="{{$proveedores->nombreproveedor}}"
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label for="representante" style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Representante') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="representante" placeholder=""
                        value="{{$proveedores->representante}}"
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label for="nit" style="color:#009EFB;font-weight: bold;"
                    class="required  col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="cedula" placeholder=""
                        value="{{$proveedores->cedula}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label for="nit" style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Nit/Ci') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nitCi" placeholder="" value="{{$proveedores->nitCi}}"
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>
            <div class="form-group row">
                <label for="telefono" style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="telefono" placeholder=""
                        value="{{$proveedores->telefonoproveedor}}"
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            </br>

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