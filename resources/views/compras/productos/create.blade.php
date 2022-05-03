@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Agregar Registro') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/productos') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('productos.store') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <div class="col-md-6">
                    <textarea id="name" type="text" name="nombre" placeholder="Nombre..." cols="50" rows="2"
                        
                        onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="detalle" class="required col-md-4 col-form-label text-md-right">{{ __('Detalle') }}</label>
                <div class="col-md-6">
                    <textarea  id="detalle" type="text" name="detalle" cols="50" rows="4" placeholder="Detalle..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="precio" class="required col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                <div class="col-md-6">
                    <input id="precio"  name="precio" type="number" placeholder="0.0" step="0.01" placeholder="Precio..."
                        >
                </div>
            </div>

            <div class="form-group row">
                <label class="required col-md-4 col-form-label text-md-right">{{ __('Partida') }}</label>
                <div class="col-md-6" id="permissions-select">
                    <select name="idpartida" id="permissions" class="col-md-6">
                        @foreach ($partidas as $par)

                        <option value="{{$par->idpartida}}">{{$par->codigopartida}} - {{$par->nombrepartida}}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
            <label class="required col-md-4 col-form-label text-md-right">{{ __('Medida') }}</label>
                <div class="col-md-6" id="permissions-select2">
                    
                    <select name="idmedida" id="permissions" class="col-md-6">
                        @foreach ($medidas as $med)

                        <option value="{{$med->idumedida}}">{{$med->nombreumedida}}</option>

                        @endforeach
                    </select>
                </div>
            </div>






            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Crear') }}
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
var permission_select2 = new SlimSelect({
    select: '#permissions-select2 select',
    //showSearch: false,
    placeholder: 'Select Permissions',
    deselectLabel: '<span>&times;</span>',
    hideSelectedOption: true,
});
</script>
@endsection