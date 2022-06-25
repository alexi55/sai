@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

            <div class="row">
                <a href="{{ url('/compras/productos/index') }}" class="btn blue darken-4 text-black "><i
                        style="color:#55CE63;font-weight: bold;" class="fa fa-plus-square"></i> Volver atras</a>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('planta.guardar') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <label for="nombres" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
                        <div class="col-md-8">
                            <input required type="text" name="nombres" placeholder="Nombres..."
                                onkeyup="javascript:this.value=this.value.toUpperCase();"></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="appat" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Ap.Paterno') }}</label>
                        <div class="col-md-8">
                            <input required type="text" name="appat" placeholder="Ap.Pat...."
                                onkeyup="javascript:this.value=this.value.toUpperCase();"></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="apmat" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Ap.Materno') }}</label>
                        <div class="col-md-8">
                            <input required type="text" name="apmat" placeholder="Ap.Pat...."
                                onkeyup="javascript:this.value=this.value.toUpperCase();"></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fingreso" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('F.Ingreso.') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="fingreso">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="natalicio" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('F.Natalicio.') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="natalicio">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="edad" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                        <div class="col-md-4">
                            <input required type="number" placeholder="0" name="edad"></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ci" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Ci.') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="ci">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="poai" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Poai') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="poai">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exppoai" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Exp.Poai') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="exppoai">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="decjurada" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Dec.Jurada') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="decjurada">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="expdecjurada" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Exp.Dec.Jurada') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="expdecjurada">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sippase" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Sippase') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="sippase">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="expsippase" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Exp.Sippase') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="expsippase">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="servmilitar" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Serv.Militar') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="sippase">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="idioma" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Idioma') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="sippase">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="induccion" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Induccion') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="induccion">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="expinduccion" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Exp.Induccion') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="expinduccion">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="progvacacion" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Prog.Vacacion') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="progvacacion">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="expprogvacacion" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Exp.Prog.Vacacion') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="date" class="form-control" name="expprogvacacion">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vacganadas" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Vacac.Ganadas') }}</label>
                        <div class="col-md-4">
                            <input required type="number" placeholder="0" name="vacganadas"
                                placeholder="Ap.Pat...."></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vacpendientes" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Vac.Pendientes') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="vacpendientes">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vacusadas" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Vac.Usadas') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="vacusadas">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="segsalud" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Seg.Salud') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="segsalud">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inamovilidad" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Inamovilidad') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="inamovilidad">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="aservicios" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Años Serv.') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="aservicios">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cvitae" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Curr.Vitae') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="cvitae">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="aservicios" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="aservicios">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="biometrico" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Biometrico') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="biometrico">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gradacademico" style="color:#009EFB;font-weight: bold;"
                            class="required col-md-4 col-form-label text-md-right">{{ __('Grad.Academico') }}</label>
                        <div class="col-md-3 input-group date">
                            <input type="text" name="gradacademico">

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


            </div>
        </div>
    </div>
</div>

@endsection