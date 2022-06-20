@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Editar Registro</div>
            <div class="row">
                <a href="{{ url('compras/productos/index') }}" class="btn blue darken-4 text-black "><i
                        style="color:#55CE63;font-weight: bold;" class="fa fa-plus-square"></i> Volver atras</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('productos.update', $productos->idprodserv) }}">
                    @csrf
                    @method('POST')

                    <div class="form-group row">
                        <label style="color:#009EFB;font-weight: bold;" for="name"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <textarea id="name" required type="text" name="nombre" placeholder="Nombre..." cols="50"
                                rows="2"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">{{$productos->nombreprodserv}}</textarea>
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <label style="color:#009EFB;font-weight: bold;" for="detalle"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Detalle') }}</label>
                <div class="col-md-6">
                    <textarea id="detalle" required type="text" name="detalle" cols="51" rows="4"
                        placeholder="Detalle..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">{{$productos->detalleprodserv}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label style="color:#009EFB;font-weight: bold;" for="precio"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                <div class="col-md-6">
                    <input id="precio" required name="precio" type="number" placeholder="0.0" step="0.01"
                        placeholder="Precio..." value="{{$productos->precioprodserv}}">
                </div>
            </div>

            <div class="form-group row">
                <label style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Partida') }}</label>
                <div class="col-md-8" id="permissions-select">
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
                <label style="color:#009EFB;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Medida') }}</label>
                <div class="col-md-8" id="permissions-select2">

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

            </br>


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-outline-info">
                        {{ __('Guardar') }}
                    </button>
                </div>
            </div>
            </br>
            </br>
            </form>

        </div>
    </div>
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