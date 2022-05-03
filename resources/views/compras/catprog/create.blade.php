@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Agregar Registro') }}</div>
        <div class="row">
      <div class="col-md-6">
        <div class="row">
          <a href="{{ url('/compras/catprog') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"></i> Volver atras</a>
        </div>
      </div>
    </div>
        <div class="card-body">
            <form method="POST" action="{{ route('catprog.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="codigo" class="required col-md-4 col-form-label text-md-right">{{ __('Codigo') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="codigo" class="form-control" placeholder="Nombre..." onkeyup="javascript:this.value=this.value.toUpperCase();" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nombre" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." onkeyup="javascript:this.value=this.value.toUpperCase();" >
                    </div>
                </div>   

               



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection