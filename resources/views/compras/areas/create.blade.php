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
                    <input type="text" required name="nombre" class="form-control" placeholder="Nombre..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
            </div>

            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('Niveles') }}</label>
                <div class="col-md-8" id="permissions-select">
                    <select name="idnivel" required id="permissions" class="col-md-6">
                        @foreach ($niveles as $nivel)

                        <option value="{{$nivel->idnivel}}">{{$nivel->nivel}} - {{$nivel->nombrenivel}}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="required  col-md-4 col-form-label text-md-right"
                    style="color:#009EFB;font-weight: bold;">{{ __('areas') }}</label>
                <div class="col-md-8" id="permissions-select2">
                
                    <select name="idarea" id="permissions2" class="col-md-6">
                    <option value="">== Seleccione un File ==</option>
                        @foreach($area as $areas)
                        <option  disabled><h1 color:blue;>{{$areas->nombrearea}}</H1> </option>
                        @foreach($areas->iPais_all as $destino)

                        @if ($destino->estadofile == 1)
            
                        <option style="color:blue;" value="{{$destino->idfile}}"> --FILE--{{$destino->numfile}}-{{$destino->cargo}}-{{$destino->nombrecargo}}-{{$destino->habbasico}}-{{$destino->categoria}}-{{$destino->niveladm}}-{{$destino->clase}}-{{$destino->nivelsal}} </option> 

                         @endif
                       
                        @endforeach
                        @endforeach

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
var permission_select = new SlimSelect({
    select: '#permissions-select select',
    //showSearch: false,
    placeholder: 'Select Permissions',
    deselectLabel: '<span>&times;</span>',
    hideSelectedOption: true,
});

</script>
@endsection