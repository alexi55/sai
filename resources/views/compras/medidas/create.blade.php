@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Agregar Registro</div>
            <div class="row">
                <a href="{{ url('/compras/medidas/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>

            <div class="card-body">
            <font size="2" face="Courier New" >
                <form method="POST" action="{{ route('medidas.store') }}">
                    @csrf

                    <div class="form-group row">
                    <label for="role_id" style="color:#009EFB;font-weight: bold;"
                                class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        
                        <div class="col-md-8">
                            <input type="text" name="nombre" required class="form-control"
                                placeholder="Nombre de la medida..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>

                    </br>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"  class="btn btn-outline-info btn-sm">
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