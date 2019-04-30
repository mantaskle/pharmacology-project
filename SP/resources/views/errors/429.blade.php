@extends('errors::illustrated-layout')

@section('code', '429')
@section('title', __('Per daug užklausų'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Atsiprašome, jūs kuriate per daug užklausų mūsų serveriui.'))
