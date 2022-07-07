@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Agregar Registro</div>
            <div class="row">
                <a href="{{ url('/compras/medidas/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('medidas.store') }}">
                    @csrf

                    <div class="form-group row">
                    <span class="input-group-text" style="color:#009EFB;font-weight: bold;">Nombre:</span>
                        
                        <div class="col-md-6">
                            <input type="text" name="nombre" required class="form-control"
                                placeholder="Nombre de la medida..."
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
    </div>
</div>

@endsection