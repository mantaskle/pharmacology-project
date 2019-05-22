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
                <h1 class="text-white"><i>WIKI - Užklausos</i></h1>
                <div class="bg-text">
                <p>Susidūrus su problema, galite sukurti naują užklausą administratoriams, paspaudus mygtuką "Pridėti užklausą" skiltyje "Užklausos", arba pradžios puslapyje.
                <br><br>    
                Sukūrus užklausą, matysite jos statusą, o paspaudus ant užklausos pavadinimo, galite pridėti arba matyti užklausos komentarus.</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection