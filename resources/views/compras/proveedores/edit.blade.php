@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Registro</div>
                <div class="row">
                    <a href="{{ url('/compras/proveedores/index') }}" class="btn blue darken-4 text-black "><i
                            class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
                </div>
                <div class="card-body">
                <font size="2" face="Courier New" >
                    <form method="POST" action="{{ route('proveedores.update', $proveedores->idproveedor) }}">
                        @csrf
                        @method('POST')

                        <div class="form-group row">
                            <label for="nombre" style="color:#009EFB;font-weight: bold;"
                                class=" col-md-4 col-form-label text-md-right">{{ __('Nombre Proveedor') }}</label>
                            <div class="col-md-4">
                                <input type="text" required class="form-control" name="nombre" placeholder=""
                                    value="{{$proveedores->nombreproveedor}}"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="representante" style="color:#009EFB;font-weight: bold;"
                                class=" col-md-4 col-form-label text-md-right">{{ __('Representante') }}</label>
                            <div class="col-md-4">
                                <input type="text" required class="form-control" name="representante" placeholder=""
                                    value="{{$proveedores->representante}}"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nit" style="color:#009EFB;font-weight: bold;"
                                class="  col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>
                            <div class="col-md-4">
                                <input type="text" required class="form-control" name="cedula" placeholder=""
                                    value="{{$proveedores->cedula}}"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nit" style="color:#009EFB;font-weight: bold;"
                                class=" col-md-4 col-form-label text-md-right">{{ __('Nit/Ci') }}</label>
                            <div class="col-md-4">
                                <input type="text" required class="form-control" name="nitci" placeholder=""
                                    value="{{$proveedores->nitci}}"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefono" style="color:#009EFB;font-weight: bold;"
                                class=" col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                            <div class="col-md-4">
                                <input type="text" required class="form-control" name="telefono" placeholder=""
                                    value="{{$proveedores->telefonoproveedor}}"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>

                        </br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success btn-sm">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>

                    </form>
</font>

                </div>
            </div>
        </div>
    </div>

@endsection