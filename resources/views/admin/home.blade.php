@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Pantalla Principal') }}</div>

        <div class="card-body">


            {{ __('Bienvido al Sistema') }}
        </div>

        <br><br>
            <div class="text-center col-md-12">
                <img src="{{ asset('logos/GOBERNACION.png') }}" class="dark-logo" width="600px" alt="Laravel Roles & Permissions Manager">
            </div>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            
    </div>

@endsection
