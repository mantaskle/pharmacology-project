@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Patvirtinkite savo el-pašto adresą') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Patvirtinimo nuoroda buvo išsiųsta į Jūsų el-paštą.') }}
                        </div>
                    @endif

                    {{ __('Prieš tęsdami, prašome peržiūrėti į Jūsų el-paštą atsiūstą patvirtinimo nuorodą.') }}
                    {{ __('Jei negavote nuorodos el-paštu') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
