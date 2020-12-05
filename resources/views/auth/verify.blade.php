@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar tu dirección de correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificación ha sido enviado a tu dirección de correo.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, revisa un link de verificación en tu correo') }}
                    {{ __('Si no has recibido el correo.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Reenviar solicitud') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
