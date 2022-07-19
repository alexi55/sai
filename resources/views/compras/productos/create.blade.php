@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Agregar Registro</div>
            <div class="row">
                <a href="{{ url('/compras/productos/index') }}" class="btn blue darken-4 text-black "><i
                        style="color:#55CE63;font-weight: bold;" class="fa fa-plus-square"></i> Volver atras</a>
            </div>

            <div class="card-body">
            <font size="2" face="Courier New" >
                <form method="POST" action="{{ route('productos.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <label for="name" style="color:#009EFB;font-weight: bold;"
                            class=" col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <textarea id="name" required type="text" require name="nombre" placeholder="Nombre..."
                                cols="50" rows="2" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="detalle" style="color:#009EFB;font-weight: bold;"
                            class=" col-md-4 col-form-label text-md-right">{{ __('Detalle') }}</label>
                        <div class="col-md-6">
                            <textarea id="detalle" required type="text" name="detalle" cols="50" rows="4"
                                placeholder="Detalle..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio" style="color:#009EFB;font-weight: bold;"
                            class=" col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                        <div class="col-md-6">
                            <input id="precio" required name="precio" type="number" placeholder="0.0" step="0.01"
                                placeholder="Precio...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="  col-md-4 col-form-label text-md-right"
                            style="color:#009EFB;font-weight: bold;">{{ __('Partida') }}</label>
                        <div class="col-md-8" id="permissions-select">
                            <select name="idpartida" id="permissions" class="col-md-6">
                                @foreach ($partidas as $par)

                                <option value="{{$par->idpartida}}">{{$par->codigopartida}} -
                                    {{$par->nombrepartida}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class=" col-md-4 col-form-label text-md-right"
                            style="color:#009EFB;font-weight: bold;">{{ __('Medida') }}</label>
                        <div class="col-md-8" id="permissions-select2">

                            <select name="idmedida" id="permissions" class="col-md-6">
                                @foreach ($medidas as $med)

                                <option value="{{$med->idumedida}}">{{$med->nombreumedida}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    </br>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-success btn-sm">
                                {{ __('Guardar') }}
                            </button>
                        </div>
                    </div>
                </form>
</font>

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
});
</script>
@endsection