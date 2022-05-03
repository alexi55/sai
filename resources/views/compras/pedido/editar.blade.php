@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Editar Compra') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/pedido') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>
    <div class="card-body">
    <form method="POST" action="{{ route('pedido.update', $compras->idcompra) }}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                <label for="objeto" class="required col-md-4 col-form-label text-md-right">{{ __('Objeto') }}</label>
                <div class="col-md-6">
                <textarea type="text"  id="objeto"  name="objeto" cols="60" rows="3" placeholder="Objeto..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">{{$compras->objeto}}</textarea>
                </div>
                </div>
            <div class="form-group row">
                <label for="justificacion" class="required col-md-4 col-form-label text-md-right">{{ __('Justificacion') }}</label>
                <div class="col-md-6">
                    <textarea  id="detalle" type="text" name="justificacion" cols="60" rows="8" placeholder="Detalle..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">{{$compras->justificacion}}</textarea>
                </div>
            </div>


            <div class="form-group row">
                <label for="preventivo"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Preventivo') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="preventivo" placeholder="" 
                    value="{{$compras->preventivo}}" >
                </div>
            </div>
            <div class="form-group row">
                <label for="tipo" class="required col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>
                <div class="col-md-2">
                    <select name="tipo" class="form-control"  >


                      
                        <option value="1" >TIPO 1</option>
                        <option value="2">TIPO 2</option>
                        
                    </select>

                </div>
            </div>

            <div class="form-group row">
                <label for="numcompra" class="required col-md-4 col-form-label text-md-right">{{ __('Num.Compra') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="numcompra" placeholder="" 
                        onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$compras->numcompra}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="controlinterno" class="required col-md-4 col-form-label text-md-right">{{ __('Cont.Interno') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="controlinterno" placeholder="" value="{{$compras->controlinterno}}" >
                </div>
            </div>

        



            <div class="form-group row">
                <label class="required col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
                <div class="col-md-6" id="permissions-select">

                    <select name="idarea" id="permissions" class="col-md-8">
                        @foreach ($areas as $area)
                      
                        @if ($area->idarea==$compras->idarea)
                        <option value="{{$area->idarea}}" selected>{{$area->nombrearea}}</option>
                        @else
                        <option value="{{$area->idarea}}">{{$area->nombrearea}}</option>
                        @endif
                      
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="required col-md-4 col-form-label text-md-right">{{ __('Programa') }}</label>
                <div class="col-md-6" id="permissions-select2">

                    <select name="idprograma" id="permissions" class="col-md-10">
                        @foreach ($programas as $programa)
                      
                        @if ($programa->idprograma==$compras->idprograma)
                        <option value="{{$programa->idprograma}}" selected>{{$programa->nombreprograma}}</option>
                        @else
                        <option value="{{$programa->idprograma}}" >{{$programa->nombreprograma}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="required col-md-4 col-form-label text-md-right">{{ __('Cat.Programatica') }}</label>
                <div class="col-md-6" id="permissions-select3">

                    <select name="idcatprogramatica" id="permissions" class="col-md-8">
                        @foreach ($catprogramaticas as $catprogramatica)
                      
                        <option value="{{$catprogramatica->idcatprogramatica}}" selected>{{$catprogramatica->nombrecatprogramatica}}</option>
                        
                        @if ($catprogramatica->idcatprogramatica==$compras->idcatprogramatica)
                        <option value="{{$catprogramatica->idcatprogramatica}}" selected>{{$catprogramatica->nombrecatprogramatica}}</option>
                        @else
                        <option value="{{$catprogramatica->idcatprogramatica}}" >{{$catprogramatica->nombrecatprogramatica}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="required col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>
                <div class="col-md-6" id="permissions-select4">

                    <select name="idproveedor" id="permissions" class="col-md-8">
                        @foreach ($proveedores as $proveedor)
                      
                        <option value="{{$proveedor->idproveedor}}" selected>{{$proveedor->nombreproveedor}}</option>
                      
                        @if ($proveedor->idproveedor==$compras->idproveedor)
                        <option value="{{$proveedor->idproveedor}}" selected>{{$proveedor->nombreproveedor}}</option>
                        @else
                        <option value="{{$proveedor->idproveedor}}" >{{$proveedor->nombreproveedor}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
            </div>






            <div class="box-footer" align="center">
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
});
var permission_select = new SlimSelect({
    select: '#permissions-select3 select',
    //showSearch: false,
    placeholder: 'Select Permissions',
    deselectLabel: '<span>&times;</span>',
    hideSelectedOption: true,
});
var permission_select2 = new SlimSelect({
    select: '#permissions-select4 select',
    //showSearch: false,
    placeholder: 'Select Permissions',
    deselectLabel: '<span>&times;</span>',
    hideSelectedOption: true,
});
</script>
@endsection