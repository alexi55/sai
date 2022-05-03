@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Editar Registro') }}</div>

    <div class="card-body">

    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <a href="{{ url('/compras/medidas') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"></i> Volver atras</a>
        </div>
      </div>
    </div>
        <br /><br />



        <div class="col-md-8 col-md-offset-1">
            
            <form method="POST" action="{{ route('medidas.update', $medida->idumedida) }}">
                @csrf
                @method('PUT')
                <div class="box-body">

                    <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
                        <label for="nome" class="col-sm-2 control-label">Nombre Medida</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" placeholder=""
                                value="{{$medida->nombreumedida}}"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>
                    <br />

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Guardar</button>
                    </div>
                </div>
            </form>
        </div>






    </div>
</div>

@endsection