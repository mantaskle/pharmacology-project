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
                <h1 class="text-white"><i>WIKI - Receptų paskyrimas</i></h1>
                <div class="bg-text">
                <p>Puslapio skiltyje "Paskirti receptai" galite paskirti naują receptą pacientui.
                    <br><br>
                    Paskyriant receptą nurodomas pacientas, data, <a href="{{ url('/wiki/vaistai') }}">vaistas</a> bei papildoma informacija.
                    <br><br>
                    Paskyrus receptą, galite dozuoti vaistą pagal paciento duomenis paspaudus mygtuką "Dozavimas".</p>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection