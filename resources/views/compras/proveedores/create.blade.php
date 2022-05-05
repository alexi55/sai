@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Agregar Registro') }}</div>
        <div class="row">
      <div class="col-md-6">
        <div class="row">
          <a href="{{ url('/compras/proveedores') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"></i> Volver atras</a>
        </div>
      </div>
    </div>
        <div class="card-body">
            <form method="POST" action="{{ route('proveedores.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="nombre" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre Proveedor') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." onkeyup="javascript:this.value=this.value.toUpperCase();" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="representante" class="required col-md-4 col-form-label text-md-right">{{ __('Representante Proveedor') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="representante" class="form-control" placeholder="representante..." onkeyup="javascript:this.value=this.value.toUpperCase();" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cedula" class="required col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="cedula" class="form-control" placeholder="cedula..."  >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nitCi" class="required col-md-4 col-form-label text-md-right">{{ __('Nit/Ci') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="nitCi" class="form-control" placeholder="Nit/Ci..."  >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="required col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono..."  >
                    </div>
                </div>


               

               



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success pull-right">
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection