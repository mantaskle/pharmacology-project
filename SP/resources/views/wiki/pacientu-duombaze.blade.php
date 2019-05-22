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
                <h1 class="text-white"><i>WIKI - Pacientų duombazė</i></h1>
                <div class="bg-text">
                <p>Norint pridėti naują pacientą į duomenų bazę, spauskite "Pridėti pacientą" mygtuką, puslapio "Pacientai" skiltyje.
                    <br>
                    Naujas pacientas bus pridėtas į duomenų bazę, jei visi laukai bus užpildyti teisingai. Apie nekorektišką informaciją įvedimo laukuose praneš klaidos pranešimai.
                    <br><br>
                    Pasikeitus paciento informacijai, ją galima koreguoti paspaudus "Redaguoti" mygtuką.
                    <br><br>
                    Norint pašalinti pacientą, spauskite "Šalinti" lentelėje, prie norimo pašalinti paciento.</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection