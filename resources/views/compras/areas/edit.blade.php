@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Editar Registro</div>
            <div class="row">
                <a href="{{ url()->previous() }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"
                        style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('areas.update', $areas->idarea) }}">
                    @csrf
                    @method('POST')

                    <div class="form-group row">
                        <label for="nombre"
                            class="required col-md-4 col-form-label text-md-right" style="font-weight: bold;">{{ __('Nombre') }}</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nombre" placeholder=""
                                value="{{$areas->nombrearea}}"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>




                    <div class="box-footer" align="center">
                        <button type="submit" class="btn btn-success pull-right">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection