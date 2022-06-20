@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Agregar Registro') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/areas/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('areas.store') }}">
            @csrf

            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('Niveles') }}</label>
                <div class="col-md-8" id="permissions-select">
                    <select name="idnivel" id="permissions" class="col-md-6">
                        @foreach ($niveles as $nivel)

                        <option value="{{$nivel->idnivel}}">{{$nivel->nivel}} - {{$nivel->nombrenivel}}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('Niveles') }}</label>
                <div class="col-md-8" id="permissions-select2">
                    <select name="idarea" id="permissions2" class="col-md-6">
                        @foreach($area as $areas)
                        <option disabled value="{{$areas->idarea}}">{{$areas->nombrearea}} </option>
                        @foreach($areas->iPais_all as $destino)
                        <option value="{{$destino->idfile}}">
                            {{$destino->numfile}}-{{$destino->sueldo}}-{{$destino->cargofile}} </option>
                        @endforeach
                        @endforeach

                    </select>
                </div>
            </div>





            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('Niveles') }}</label>
                <div class="col-md-8" id="categorias">
                    <select name="idarea" id="areas" class="col-md-6">
                        <optionvalue="">Seleccioneoption>
                            @foreach ($area as $areas)
                            <option value="{{$areas->idarea}}">{{$areas->nombrearea}}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('Niveles') }}</label>
                <div class="col-md-8" id="productos">
                    <select name="idnivel" id="files" class="col-md-6">
                        <optionvalue="">Seleccioneoption>

                    </select>
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
@section('scripts')
<script>
  $(document).ready(function(){
    $("#categorias").change(function(){
      var categoria = $(this).val();
      $.get('productByCategory/'+areas, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          var producto_select = 'Seleccione Porducto'
            for (var i=0; i''">'+data[i].numfile+'';)
            {

                $("#files").html(producto_select);
            }

           

      });
    });
  });
script>
@endsection