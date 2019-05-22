@extends('layouts.app')

<style>

p {
    color:white !important;
}

ul {
  list-style: none
}

li {
    font-size: 20px;
}

ul li::before {
  content: "\2022"; 
  color: white;
  font-weight: bold;
  display: inline-block; 
  width: 1em; 
  margin-left: -1em; 
}

</style>

@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h1 class="text-white"><i>WIKI - Puslapio funkcijos</i></h1>
                <div class="bg-text">
                <h3>Šiuo metu siūlomos puslapio funkcijos: </h3>
                <ul>
                    <li><a href="{{ url('/wiki/vaistu-dozavimas') }}">Vaistų dozavimas</a></li>
                    <li><a href="{{ url('/wiki/vaistai') }}">Vaistai</a></li>
                    <li><a href="{{ url('/wiki/pacientu-duombaze') }}">Pacientų duombazė</a></li>
                    <li><a href="{{ url('/wiki/receptu-paskyrimas') }}">Receptų paskyrimas</a></li>
                    <li><a href="{{ url('/wiki/kalendorius') }}">Kalendorius (Įvykių pridėjimas)</a></li>
                    <li><a href="{{ url('/wiki/uzklausos') }}">Užklausos</a></li>
                </ul> 
                <div><a class="btn btn-primary" href="{{url('/wiki')}}">Atgal</a></div>
                </div>
            </div>
        </div>   
</div>

@endsection