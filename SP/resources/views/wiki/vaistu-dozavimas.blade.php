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
                <h1 class="text-white"><i>WIKI - Vaistų dozavimas</i></h1>
                <div class="bg-text">
                <p>Apskaičiuoti <a href="{{ url('/wiki/vaistai') }}">siūlomų vaistų</a> dozę galima įrankių juostoje pasirinkus "Vaistų dozavimas" skiltį.
                <br><br>
                Suvedus reikiamą informaciją (amžių, svorį, skausmo lygį) ir pasirinkus norimą vaistą, paspaudus "Skaičiuoti" mygtuką, jums bus apskaičiuota reikiama vaisto dozė skausmui numalšinti.</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection