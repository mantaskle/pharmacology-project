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
                <h1 class="text-white"><i>WIKI - Registracija</i></h1>
                <div class="bg-text">
                <p>Registruojantis, suveskite savo duomenis į prašomus laukus ir spauskite "Registruotis" mygtuką. Jei įvesti duomenys yra nekorektiški arba neatitinka reikalavimų, apie tai jums bus pranešta klaidos pranešimu.
                <br><br>
                Po sėkmingos registracijos, galite prisijungti, tačiau gali reikėti palaukti, kol jūsų paskyra bus patvirtinta.</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection