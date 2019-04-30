@extends('errors::illustrated-layout')

@section('code', '419')
@section('title', __('Sesija pasibaigė'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Atsiprašome, jūsų sesija pasibaigė. Perkraukite puslapį ir bandykite dar kartą.'))
