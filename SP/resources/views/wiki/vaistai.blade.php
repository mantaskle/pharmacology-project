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
                <h1 class="text-white"><i>WIKI - Vaistai</i></h1>
                <div class="bg-text">
                <h3>Šiuo metu puslapyje galima <a href="{{ url('/wiki/vaistu-dozavimas') }}">dozuoti</a> šiuos vaistus: </h3>
                <div class="text-white">
                <ul>
                    <li>Morphine</li>
                    <li>Codeine</li>
                    <li>Oxycodone</li>
                    <li>Methadone</li>
                    <li>Hydromorphone</li>
                    <li>Meperidine</li>
                </ul>
                </div>
                <a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a>
                </div>
            </div>
        </div>   
</div>

@endsection