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
                <a href="{{ url('/compras/pedido') }}" class="btn blue darken-4 text-black "><i
                        class="fa fa-plus-square"></i> Volver atras</a>
                <h3>Detalle Compras

                    @if ($estado==1)
                    <a class="btn btn-success" href="detalle/{{$idcompra}}/principalorden">Ver Orden de Compra</a>
                    @else
                    <a href="detalle/{{$idcompra}}/principal" class="btn btn-danger">Crear Orden de Compra</a>
                    @endif



                    <a href="detalle/print"><button class="btn btn-warning">Imp.Detalle</button></a>

                </h3>

            </div>
        </div>
    </div>


    <div class="card-body table-responsive">

        <form method="POST" action="{{ route('detalle.store') }}">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group" id="permissions-select">
                        <label for="producto" style="color:red;font-weight: bold;">Producto-Item:</label>
                        <select name="producto" id="permissions">
                            @foreach($productos as $prod)
                            <option value="{{$prod -> idprodserv}}">
                                {{$prod -> nombreprodserv}}---(PRECIO"-{{$prod -> precioprodserv}} Bs.)</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="col-md-2">
                    <label for="nombre" style="color:red;font-weight: bold;">Cantidad:</label>
                    <div class="form-group">

                        <input type="number" class="form-control" name="cantidad" placeholder="Cantidad..." required
                            value="{{old('cantidad')}}">

                    </div>
                </div>



                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <button class="btn btn-outline-primary" type="submit">adicionar</button>
                    </div>
                </div>









            </div>
        </form>



        <table class="table table-borderless table-hover">
            <tr>

                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>SUBTOTAL</th>
                <th>OPCION</th>


            </tr>
            @forelse ($prodserv as $prod)
            <tr>

                <td>{{ $prod -> nombreprodserv}}</td>
                <td>{{ $prod -> cantidad}}</td>
                <td>{{ $prod -> precio}}</td>
                <td>{{ $prod -> subtotal}}</td>


                <td>
                    <form action="{{ route('detalle.destroy', $prod->iddetallecompra) }}" class="d-inline-block"
                        method="post">
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
            <tr>
                <td style="background-color: #C4F1FF;"></td>
                <td style="background-color: #C4F1FF;"></td>
                <td style="background-color: #C4F1FF;"></td>
                <td style="text-align: right; background-color: #C4F1FF;">
                    <b>TOTAL:</b>
                </td>
                <td style="background-color: #C4F1FF;">
                    <b>{{$valor_total}}</b>
                </td>

            </tr>
        </table>


        @if($prodserv->total() > $prodserv->perPage())
        <br><br>
        {{$prodserv->links()}}
        @endif



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
})
</script>
@endsection