@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Editar Registro') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/productos') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('productos.update', $productos->idprodserv) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="name" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <div class="col-md-6">
                    <textarea id="name" type="text" name="nombre" placeholder="Nombre..." cols="50" rows="2"
                       
                        onkeyup="javascript:this.value=this.value.toUpperCase();">{{$productos->nombreprodserv}}</textarea>
                </div>
            </div>
    </div>
    <div class="form-group row">
        <label for="detalle" class="required col-md-4 col-form-label text-md-right">{{ __('Detalle') }}</label>
        <div class="col-md-6">
            <textarea id="detalle" type="text" name="detalle" cols="50" rows="4" placeholder="Detalle..."
                onkeyup="javascript:this.value=this.value.toUpperCase();">{{$productos->detalleprodserv}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="precio" class="required col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
        <div class="col-md-6">
            <input id="precio" name="precio" type="number" placeholder="0.0" step="0.01" placeholder="Precio..."
                value="{{$productos->precioprodserv}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="required col-md-4 col-form-label text-md-right">{{ __('Partida') }}</label>
        <div class="col-md-6" id="permissions-select">
            <select name="idpartida" id="permissions" class="col-md-6">
                @foreach ($partidas as $par)
                @if ($par->idpartida==$productos->partida_idpartida)
                <option value="{{$par->idpartida}}" selected>{{$par->codigopartida}}</option>
                @else
                <option value="{{$par->idpartida}}">{{$par->codigopartida}}</option>
                @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="required col-md-4 col-form-label text-md-right">{{ __('Medida') }}</label>
        <div class="col-md-6" id="permissions-select2">

            <select name="idmedida" id="permissions" class="col-md-6">
                @foreach ($medidas as $med)

                @if ($med->idumedida==$productos->umedida_idumedida)
                <option value="{{$med->idumedida}}" selected>{{$med->nombreumedida}}</option>
                @else
                <option value="{{$med->idumedida}}">{{$med->nombreumedida}}</option>
                @endif



                @endforeach
            </select>
        </div>
    </div>






    <div class="box-footer"  align="center">
        <button type="submit" class="btn btn-success pull-right">Guardar</button>
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
})
</script>
@endsection