@extends('layouts.admin')

@section('content')

<div style="color:#009EFB;font-weight: bold;">Editar Registro</div>
</br>
<div class="card col-md-10">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/programas/index') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('programas.update', $programas->idprograma) }}">
            @csrf
            @method('POST')

            <div class="form-group row">
                <label for="nombre" style="color:#009EFB;font-weight: bold;" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
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
