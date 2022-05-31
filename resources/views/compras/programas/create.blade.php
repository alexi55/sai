@extends('layouts.admin')

@section('content')

    <div class="card col-md-9">
        <div class="card-header" style="color:#0096C9;font-weight: bold;">{{ __('Agregar Registro') }}</div>
        <div class="row">
      <div class="col-md-6">
        <div class="row">
          <a href="{{ url('/compras/programas') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
        </div>
      </div>
    </div>

    </br>  </br>  
        <div class="card-body">
            <form method="POST" action="{{ route('programas.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="nombre" style="color:#009EFB;font-weight: bold;" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-8">
                    <input type="text" name="nombre" class="form-control" placeholder="Escriga el Nombre del Programa..." onkeyup="javascript:this.value=this.value.toUpperCase();" >
                    </div>
                </div>

                          

</br>     



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection