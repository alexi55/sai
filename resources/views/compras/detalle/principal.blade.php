@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Crear Orden de Compra') }}</div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <a href="{{ url('/compras/detalle') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
            </div>
        </div>
    </div>

    <label style="color:red;"
        class="required col-md-4 col-form-label text-md-right">{{ __('Los campos marcados con color ROJO son obligarios') }}</label>
    <div class="card-body">
        <form action="{{ route('DetalleCompraController.crearOrden') }}" method="POST">
            @csrf
            <input name="idcompra" hidden type="text" value="{{$idcompra}}">

            <div class="form-group row">
                <label for="informe" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Inf.Cotiz.N°') }}</label>
                <div class="col-md-1">
                    <input type="text" class="form-control" name="informe" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="fechaOden" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Fech.Ord.Compra.') }}</label>
                <div class="col-md-2 input-group date">
                    <input type="date" class="form-control" name="fechaOden">

                </div>
            </div>

            <div class="form-group row">
                <label for="objeto"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Nombre Compra') }}</label>
                <div class="col-md-6">
                    <textarea id="objeto" type="text" name="objeto" cols="60" rows="3" placeholder="Detalle..."
                        onkeyup="javascript:this.value=this.value.toUpperCase();">{{$compras->objeto}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="solicitante"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Solicitante') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="solicitante" placeholder=""
                        value="{{$compras->nombrearea}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="modalidad"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Modalidad de Cont.') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="modalidad" placeholder="" value="CONTRATACION MENOR">
                </div>
            </div>

            <div class="form-group row">
                <label for="subtotal"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Prec.Refer.') }}</label>
                <div class="col-md-6">
                    <input id="precio" name="subtotal" type="number" placeholder="0.0" step="0.01"
                        placeholder="Precio..." value="{{$subtotal}}">
                </div>
            </div>


            <div class="form-group row">
                <label for="proveedor"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="proveedor" placeholder=""
                        value="{{$compras->nombreproveedor}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="representante"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Representante') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="representante" placeholder=""
                        value="{{$compras->representante}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cedula" class="required col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="cedula" placeholder="" value="{{$compras->cedula}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="nit" class="required col-md-4 col-form-label text-md-right">{{ __('Nit/Ci') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nit" placeholder="" value="{{$compras->nitCi}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="telefono" placeholder=""
                        value="{{$compras->telefonoproveedor}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="apertura" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('Ap.Programatica') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="apertura" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="partida" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('Partida de Gasto') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="partida" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="actitividad"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Actividad') }}</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="actitividad" placeholder=""
                        value="{{$compras->nombreprograma}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="orden" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('N°Ord.Compra') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="orden" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="preventivo"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Preventivo') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="preventivo" placeholder=""
                        value="{{$compras->preventivo}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="ruta" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('H.Ruta') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="ruta" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="Cinterno" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('C.Interno') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="Cinterno" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="entrega" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('plaz.Entrega') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="entrega" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="fechainicio" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Fech.Inicio') }}</label>
                <div class="col-md-2 input-group date">
                    <input type="date" class="form-control" name="fechainicio">

                </div>
            </div>

            <div class="form-group row">
                <label for="fechaconclusion" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Fech.Conclusion') }}</label>
                <div class="col-md-2 input-group date">
                    <input type="date" class="form-control" name="fechaconclusion">

                </div>
            </div>

            <div class="form-group row">
                <label for="fechainvitacion" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Fech.Invitacion') }}</label>
                <div class="col-md-2 input-group date">
                    <input type="date" class="form-control" name="fechainvitacion">

                </div>
            </div>

            <div class="form-group row">
                <label for="fechaaceptacion" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Fech.Aceptacion') }}</label>
                <div class="col-md-2 input-group date">
                    <input type="date" class="form-control" name="fechaaceptacion">

                </div>
            </div>

            <div class="form-group row">
                <label for="codigocite" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('Cod.Cite Inv.') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="codigocite" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="horapresentacion" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('Hora Present. Inv.') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="horapresentacion" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="cedulaaceptacion" class="required col-md-4 col-form-label text-md-right"
                    s>{{ __('Cedula Aceptacion') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="cedulaaceptacion" placeholder=""
                        value="{{$compras->cedula}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="notaadjudicacion" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('N° Nota de Adjudicacion') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="notaadjudicacion" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="fechainiciosoli" style="color:red;font-weight: bold;"
                    class="required col-md-4 col-form-label text-md-right">{{ __('Fech.Inicio Solic.') }}</label>
                <div class="col-md-2 input-group date">
                    <input type="date" class="form-control" name="fechainiciosoli">

                </div>
            </div>
      

            <div class="form-group row">
                <label for="controlinterno" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('Control Interno') }}</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="controlinterno" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="solicitante" class="required col-md-4 col-form-label text-md-right"
                    style="color:red;font-weight: bold;">{{ __('Autoridad que Solicita') }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="solicitante" placeholder="">
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