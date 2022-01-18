@extends('layouts.app_register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('El correo de verificación ha sido enviado, revise su bandeja de entrada.') }}
                        </div>
                    @endif

                    {{ __('Antes del proceso, por favor, revise su bandeja de entrada para consultar el enlace de verificación.') }}
                    {{ __('Si no has recibido el correo de verificación') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clica aquí para solicitar una nueva') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
