@extends('layouts.admin')

@section('content')

<div  style="color:#009EFB;font-weight: bold;">Editar Registro</div>
</br>
<div class="card col-md-7">
    
    <div class="card-body">

    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <a href="{{ url('/compras/medidas/index') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
        </div>
      </div>
    </div>
        <br /><br />



        <div class="card-body ">
            
            <form method="POST" action="{{ route('medidas.update', $medida->idumedida) }}">
                @csrf
                @method('POST')
                <div class="box-body">

                <div class="form-group row">
                    <label for="role_id" style="color:#009EFB;font-weight: bold;" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre de Medida') }}</label>

                    <div class="col-md-6">
                    <input type="text" name="nombre" value="{{$medida->nombreumedida}}" class="form-control" placeholder="Escriba aqui la nueva medida..." onkeyup="javascript:this.value=this.value.toUpperCase();" >
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

 
                </div>
            </form>
        </div>






    </div>
</div>

@endsection