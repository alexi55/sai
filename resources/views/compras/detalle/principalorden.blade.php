@extends('layouts.admin')

@section('content')
@if(Session::has('message'))

<div class="alert alert-success">
    <em> {!! session('message') !!}</em>
</div>
@endif
<div class="card">
    <div class="card-header">{{ __('Detalle de la Compra') }}</div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <a href="{{ url('/compras/detalle') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>

            </div>
        </div>
    </div>
    <div class="card-body table-responsive">




        <table class="table table-borderless table-hover">
            <tr>
                <th>Fecha Orden</th>
                <th>Nombre Compra</th>
                <th>Solicitante</th>
                <th>Proveedor</th>


            </tr>
            @forelse ($ordencompra as $ocompra)
            <tr>
                <td>{{ $ocompra -> fechaorden}}</td>
                <td>{{ $ocompra -> nombrecompra}}</td>
                <td>{{ $ocompra -> solicitante}}</td>
                <td>{{ $ocompra -> proveedor}}</td>



                <td>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
            </tr>
            @endforelse

        </table>

        <div class="card-body table-responsive">





            <table class="table table-borderless table-hover">
                <tr>

                    <th>....  Documentos Requeridos  ...</th>



                </tr>
                @forelse ($ordendoc as $orden)
                <tr>

                    <td>{{ $orden -> nombredoc}}</td>

                    <td>
                        <form class="d-inline-block" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Esta Ud. Seguro..?')"
                                class="btn btn-outline-danger">Eliminar</button>
                        </form>

                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
                </tr>
                @endforelse

            </table>




        </div>




    </div>
</div>

@endsection