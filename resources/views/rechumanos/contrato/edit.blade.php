@extends('layouts.admin')

@section('content')

<div>
    <div>
        <div class="card">

            <div class="row">
                <a href="{{url()->previous()}}" class="btn blue darken-4 text-black "><i
                        style="color:#55CE63;font-weight: bold;" class="fa fa-plus-square"></i> Volver atras</a>
            </div>

            <div class="card-body">
                <font size="2" face="Courier New">
                    <form method="POST" action="{{ route('planta.actualizar') }}">
                        @csrf
                        @method('POST')
                        <input name="idemp" hidden value="{{$empleados->idemp}}"></input>
                        <input name="idareaoriginal" hidden value="{{$empleados->idarea}}"></input>
                        <input name="idfileoriginal" hidden value="{{$empleados->idfile}}"></input>
                        <div class="form-group row">
                            <span class="input-group col-md-1" style="color:black;font-weight: bold;">Nombres:</span>

                            <div class="col-md-2 ">
                                <input required type="text" name="nombres" class="form-control"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    value="{{$empleados->nombres}}"></input>
                            </div>



                            <span class="input-group offset-md-1 col-md-1"
                                style="color:black;font-weight: bold;">Ap.Paterno:</span>
                            <div class="col-md-2 ">
                                <input required type="text" name="ap_pat" class="form-control "
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    value="{{$empleados->ap_pat}}"></input>
                            </div>


                            <span class="input-group offset-md-1 col-md-1"
                                style="color:black;font-weight: bold;">Ap.Materno:</span>
                            <div class="col-md-2 ">
                                <input required type="text" name="ap_mat" class="form-control"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    value="{{$empleados->ap_mat}}"></input>
                            </div>



                        </div>



                        <div class="form-group row">


                            <span class="input-group col-md-1" style="color:black;font-weight: bold;">F.Ingreso:</span>
                            <div class="col-md-2 ">
                                <input type="date" class="form-control" name="fechingreso"
                                    value="{{$empleados->fechingreso}}">
                            </div>

                            <span class="input-group offset-md-1 col-md-1"
                                style="color:black;font-weight: bold;">F.Nacimien:</span>

                            <div class="col-md-2 ">
                                <input type="date" class="form-control" name="natalicio"
                                    value="{{$empleados->natalicio}}">
                            </div>


                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Edad:</span>
                            <div class="col-md-2 ">
                                <input required type="number" placeholder="0" name="edad" class="form-control"
                                    value="{{$empleados->edad}}"></input>
                            </div>


                        </div>



                        <div class="form-group row">

                            <span class="input-group col-md-1 " style="color:black;font-weight: bold;">Ci:</span>
                            <div class="col-md-2 ">
                                <input type="text" name="ci" class="form-control" value="{{$empleados->ci}}">
                            </div>



                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Sippase:</span>
                            <div class="col-md-2">
                                <input type="text" name="sippase" class="form-control" value="{{$empleados->sippase}}">

                            </div>

                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Exp.Sipp:</span>
                            <div class="col-md-2">
                                <input type="date" class="form-control" name="expsippase"
                                    value="{{$empleados->expsippase}}">

                            </div>


                        </div>



                        <div class="form-group row">


                            <span class="input-group col-md-1"
                                style="color:black;font-weight: bold;">Serv.Militar:</span>

                            <div class="col-md-2">
                                <input type="text" name="servmilitar" class="form-control"
                                    value="{{$empleados->servmilitar}}">

                            </div>

                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Idioma:</span>

                            <div class="col-md-2">
                                <input type="text" name="idioma" class="form-control" value="{{$empleados->idioma}}">

                            </div>


                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Curr.Vitae:</span>

                            <div class="col-md-2">
                                <input type="text" name="cvitae" class="form-control" value="{{$empleados->cvitae}}">

                            </div>


                        </div>








                        <div class="form-group row">



                            <span class="input-group col-md-1" style="color:black;font-weight: bold;">Telefono:</span>

                            <div class="col-md-2">
                                <input type="text" name="telefono" class="form-control"
                                    value="{{$empleados->telefono}}">

                            </div>


                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Biometrico:</span>

                            <div class="col-md-2">
                                <input type="text" name="biometrico" class="form-control"
                                    value="{{$empleados->biometrico}}">

                            </div>

                            <span class="input-group col-md-1 offset-md-1"
                                style="color:black;font-weight: bold;">Grad.Acad.:</span>

                            <div class="col-md-2">
                                <input type="text" name="gradacademico" class="form-control"
                                    value="{{$empleados->gradacademico}}">

                            </div>


                        </div>




                        </br>

                        <div class="form-group " style="align:center">


                            <label class="col-md-1" style="color:black;font-weight: bold;">File:</label>
                            <div id="permissions-select2">

                                <select name="idfile" id="permissions2" class="col-md-6">

                                    @foreach($area as $areas)
                                    <option disabled>
                                        <h1 color:blue;>{{$areas->nombrearea}}</H1>
                                    </option>
                                    @foreach($areas->iPais_all as $destino)
                                    @if ($destino->idfile==$empleados->idfile)
                                    <option value="{{$destino->idfile}}" selected>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-FILE-{{$destino->numfile}}-{{$destino->cargo}}-{{$destino->nombrecargo}}-{{$destino->habbasico}}-{{$destino->categoria}}-{{$destino->niveladm}}-{{$destino->clase}}-{{$destino->nivelsal}}
                                    </option>
                                    @else

                                    @if ($destino->estadofile == 1 and $destino->tipofile == 2)

                                    <option style="color:red;" value="{{$destino->idfile}}">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-FILE-{{$destino->numfile}}-{{$destino->cargo}}-{{$destino->nombrecargo}}-{{$destino->habbasico}}-{{$destino->categoria}}-{{$destino->niveladm}}-{{$destino->clase}}-{{$destino->nivelsal}}
                                    </option>

                                    @endif

                                    @endif

                                    @endforeach
                                    @endforeach

                                </select>
                            </div>
                        </div>




                        <div class="form-group " style="align:center">


                            <label class="col-md-1" style="color:black;font-weight: bold;">Area:</label>
                            <div id="permissions-select">

                                <select name="idarea" class="col-md-6">



                                    @foreach($area as $areas)
                                    @if ($areas->idarea==$empleados->idarea)
                                    <option value="{{$areas->idarea}}" selected>
                                        {{$areas->nombrearea}}
                                    </option>
                                    @else
                                    <option style="color:blue;" value="{{$areas->idarea}}">{{$areas->nombrearea}}
                                    </option>



                                    @endif


                                    @endforeach

                                </select>
                            </div>
                        </div>






                        </br>






                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success">
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
@endsection