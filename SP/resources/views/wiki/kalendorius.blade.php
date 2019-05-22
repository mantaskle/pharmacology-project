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
                <h1 class="text-white"><i>WIKI - Kalendorius</i></h1>
                <div class="bg-text">
                <p>Navigacijos juostoje pasirinkus "Kalendorius" galite peržiūrėti esamus įvykius arba pridėti naują.
                    <br><br>
                    Pridedant naują įvykį įveskite jo pavadinimą, pradžios bei pabaigos datą.
                    <br><br>
                    Pridėjus naują įvykį jis atsiras kalendoriuje ir galėsite jį peržiūrėti.</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection