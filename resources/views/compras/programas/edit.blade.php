@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Editar Registro</div>
            <div class="row">
                <a href="{{ url('/compras/programas/index') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square" style="color:#55CE63;font-weight: bold;"></i> Volver atras</a>
            </div>

            <div class="card-body">
            <font size="2" face="Courier New" >
                <form method="POST" action="{{ route('programas.update', $programas->idprograma) }}">
                    @csrf
                    @method('POST')

                    <div class="form-group row">
                        <label for="nombre" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" name="nombre" placeholder=""
                                value="{{$programas->nombreprograma}}"
                                onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                    </div>




                    <div class="box-footer" align="center">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Guardar</button>
                    </div>
                </form>

</font>
            </div>
        </div>
    </div>
</div>

@endsection