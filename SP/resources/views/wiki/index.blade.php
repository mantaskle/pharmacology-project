@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h1 class="text-white"><i>WIKI</i></h1>
                <div class="bg-text">
                    <h3 class="text-white">Norėdami sužinoti daugiau apie tam tikrą puslapio dalį, pasirinkte vieną iš nuorodų:<h3>
                <ul>
                <li><a href="{{ url('/wiki/navigacija') }}">Navigacija</a></li>
                    <ul>
                        <li><a href="{{ url('/wiki/prisijungimas') }}">Prisijungimas</a></li>
                        <li><a href="{{ url('/wiki/registracija') }}">Registracija</a></li>
                    </ul>
                <li><a href="{{ url('/wiki/puslapio-funkcijos') }}">Puslapio funkcijos</a></li>
                    <ul>
                        <li><a href="{{ url('/wiki/vaistu-dozavimas') }}">Vaistų dozavimas</a></li>
                        <li><a href="{{ url('/wiki/vaistai') }}">Vaistai</a></li>
                        <li><a href="{{ url('/wiki/pacientu-duombaze') }}">Pacientų duombazė</a></li>
                        <li><a href="{{ url('/wiki/receptu-paskyrimas') }}">Receptų paskyrimas</a></li>
                        <li><a href="{{ url('/wiki/kalendorius') }}">Kalendorius (Įvykių pridėjimas)</a></li>
                        <li><a href="{{ url('/wiki/uzklausos') }}">Užklausos</a></li>
                    </ul>  
                </ul>
                </div>
            </div>
        </div>   
</div>

@endsection