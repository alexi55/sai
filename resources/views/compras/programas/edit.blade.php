@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Editar Registro') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/programas') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('programas.update', $programas->idprograma) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="nombre" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nombre" placeholder=""
                        value="{{$programas->nombreprograma}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            
            

            <div class="box-footer" align="center">
                <button type="submit" class="btn btn-success pull-right">Guardar</button>
            </div>
        </form>
    </div>
</div>

@endsection
