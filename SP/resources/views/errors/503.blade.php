@extends('errors::illustrated-layout')

@section('code', '503')
@section('title', __('Paslauga neprieinama'))

@section('image')
    <div style="background-image: url({{ asset('/svg/503.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __($exception->getMessage() ?: 'Atsiprašome, vyksta priežiūros darbai. Patikrinkite vėliau!'))
