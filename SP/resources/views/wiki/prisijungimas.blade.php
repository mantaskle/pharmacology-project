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
                <h1 class="text-white"><i>WIKI - Prisijungimas</i></h1>
                <div class="bg-text">
                <p>Prisijungiant prie puslapio, įveskite savo el. paštą kuriuo buvo registruotasi bei slaptažodį.
                <br>
                <br>
                Suvedus teisingus prisijungimo duomenis būsite nukreiptį į pagrindinį puslapį, kuriame pasieksite siūlomus įrankius, jei jūsų paskyra yra patvirtinta.
                <br>
                <br>
                Jei įrankiai jums yra nepasiekiami, palaukite, kol jūsų paskyra bus patvirtinta.</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection