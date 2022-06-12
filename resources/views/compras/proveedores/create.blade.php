@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Agregar Registro</div>
                <div class="row">
                    <a href="{{ url('/compras/proveedores/index') }}" class="btn blue darken-4 text-black "><i
                            class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('proveedores.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" style="color:#009EFB;font-weight: bold;"
                                class="required col-md-4 col-form-label text-md-right">{{ __('Nombre Proveedor') }}</label>

                            <div class="col-md-6">
                                <input type="text" required name="nombre" class="form-control" placeholder="Nombre..."
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="representante" style="color:#009EFB;font-weight: bold;"
                                class="required col-md-4 col-form-label text-md-right">{{ __('Representante Proveedor') }}</label>

                            <div class="col-md-6">
                                <input type="text" required name="representante" class="form-control"
                                    placeholder="representante..."
                                    onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cedula" style="color:#009EFB;font-weight: bold;"
                                class="required col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                            <div class="col-md-6">
                                <input type="text" required name="cedula" class="form-control" placeholder="cedula...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nitCi" style="color:#009EFB;font-weight: bold;"
                                class="required col-md-4 col-form-label text-md-right">{{ __('Nit/Ci') }}</label>

                            <div class="col-md-6">
                                <input type="text" required name="nitCi" class="form-control" placeholder="Nit/Ci...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" style="color:#009EFB;font-weight: bold;"
                                class="required col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input type="text" required name="telefono" class="form-control"
                                    placeholder="Telefono...">
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
        </div>
    </div>
</div>
@endsection