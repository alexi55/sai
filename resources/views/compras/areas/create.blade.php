@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Agregar Registro</div>
            <div class="row">
                <a href="{{ url()->previous() }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"
                        style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('areas.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label class="required  col-md-4 col-form-label text-md-right"
                            style="font-weight: bold;">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input type="text" required name="nombre" class="form-control" placeholder="Nombre..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="required  col-md-4 col-form-label text-md-right"
                            style="font-weight: bold;">{{ __('Nivel') }}</label>
                        <div class="col-md-8" id="permissions-select">
                            <select name="idnivel" required id="permissions" class="col-md-6">
                                @foreach ($niveles as $nivel)

                                <option value="{{$nivel->idnivel}}">{{$nivel->nivel}} - {{$nivel->nombrenivel}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>










                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success btn-sm">
                                {{ __('Aceptar') }}
                            </button>
                        </div>
                    </div>
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
</script>
@endsection