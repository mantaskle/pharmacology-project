@extends('layouts.app')

<style>

p {
    color:white !important;
}


</style>

@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h1 class="text-white"><i>WIKI - Navigacija</i></h1>
                <div class="bg-text">
                <h3>Pradinis puslapis </h3>
                <p>Puslapio svečiai gali peržiūrėti "Apie mus" bei "Kontaktų" skiltis.</p>

                <p>Norėdami pasiekti siūlomas puslapio funkcijas <a href="{{ url('/wiki/Prisijungimas') }}">prisijunkite</a> arba <a href="{{ url('/wiki/Registracija') }}">užregistuokite naują paskyrą</a> pradinio puslapio viršuje dešinėje.</p>

                <h3>Navigacija prisijungus </h3>

                <p>Visi siūlomi įrankiai gali būti surasti navigacijos juostoje puslapio viršuje.</p>

                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection