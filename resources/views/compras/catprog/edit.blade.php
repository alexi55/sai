@extends('layouts.admin')

@section('content')

<div  style="color:#009EFB;font-weight: bold;">Editar Registro</div>
</br> 

<div class="card col-md-8">
  
    <div class="row">
        <div class="col-md-6">
            <div class="row" >
                <a href="{{ url('/compras/catprog/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('catprog.update', $catprogs->idcatprogramatica) }}">
            @csrf
            @method('POST')

            <div class="form-group row">
                <label for="codigo" style="color:#009EFB;font-weight: bold;" class="required col-md-4 col-form-label text-md-right">{{ __('Codigo') }}</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="codigo" placeholder=""
                        value="{{$catprogs->codcatprogramatica}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label for="nombre" style="color:#009EFB;font-weight: bold;" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" placeholder=""
                        value="{{$catprogs->nombrecatprogramatica}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
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

@endsection
