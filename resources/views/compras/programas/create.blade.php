@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Agregar Registro</div>
            <div class="row">
                <a href="{{ url('/compras/programas/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>


            <div class="card-body">
            <font size="2" face="Courier New" >
                <form method="POST" action="{{ route('programas.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="nombre" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input type="text" required name="nombre" class="form-control"
                                placeholder="Escriga el Nombre del Programa..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>



                    </br>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-primary btn-sm">
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