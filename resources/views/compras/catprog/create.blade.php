@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Agregar Registro</div>
            <div class="row">
                <a href="{{ url('/compras/catprog/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>

            <div class="card-body">

                <form method="POST" action="{{ route('catprog.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="codigo" class="required col-md-4  col-form-label text-md-right" required
                            style="color:#009EFB;font-weight: bold;">{{ __('Codigo') }}</label>

                        <div class="col-md-6">
                            <input type="text" required name="codigo" class="form-control"
                                placeholder="Escriba el Codigo..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nombre" class="required col-md-4 col-form-label text-md-right"
                            style="color:#009EFB;font-weight: bold;">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input type="text" required name="nombre" class="form-control"
                                placeholder="Escriba el Nombre..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
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

@endsection