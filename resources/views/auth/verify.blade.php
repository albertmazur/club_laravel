@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zweryfikuj swój adres email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Nowy link weryfikacyjny został wysłany na Twój adres e-mail.') }}
                        </div>
                    @endif

                    {{ __('Zanim przejdziesz dalej, sprawdź, czy w wiadomości e-mail znajduje się link weryfikacyjny.') }}
                    {{ __('Jeśli nie otrzymałeś wiadomości e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kliknij tutaj, aby poprosić o inny') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
