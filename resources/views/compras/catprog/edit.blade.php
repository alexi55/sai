@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Editar Registro') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/catprog') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('catprog.update', $catprogs->idcatprogramatica) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="codigo" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="codigo" placeholder=""
                        value="{{$catprogs->codcatprogramatica}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label for="nombre" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nombre" placeholder=""
                        value="{{$catprogs->nombrecatprogramatica}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            

            <div class="box-footer" align="center">
                <button type="submit" class="btn btn-success pull-right">Guardar</button>
            </div>
        </form>
    </div>
</div>

@endsection
