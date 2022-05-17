@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Agregar nuevo usuario') }}</div>

        <div class="card-body table-responsive">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="role_id" class="required col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                    <div class="col-md-6">
                        <select id="role_id" type="text" class="form-control @error('role_id') is-invalid @enderror" name="role_id" required autocomplete="role_id" autofocus>
                            <option value=""  selected hidden>Seleccione</option>

                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->title}} </option>
                            @endforeach
                        </select>

                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="idemp" class="required col-md-4 col-form-label text-md-right">{{ __('Empleado') }}</label>

                    <div class="col-md-6" id="permissions-select2">
                        <select id="idemp" type="text" class="form-control @error('idemp') is-invalid @enderror" name="idemp" required autocomplete="idemp" autofocus>
                            <option value=""  selected hidden>Seleccione</option>

                            @foreach ($empleados as $empleado)
                            <option value="{{$empleado->idemp}}">{{$empleado->nombres}} {{$empleado->ap_pat}}  {{$empleado->ap_mat}}  </option>
                            @endforeach
                        </select>

                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="required col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="required col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="required col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="required col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-outline-primary">
                            {{ __('Crear') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
<script>
var permission_select2 = new SlimSelect({
    select: '#permissions-select2 select',
    //showSearch: false,
    placeholder: 'Select Permissions',
    deselectLabel: '<span>&times;</span>',
    hideSelectedOption: true,
})
$(document).ready(function() {
    $('.input-group.date').datepicker({
        format: "yyyy-mm-dd"
    });

});
</script>
@endsection