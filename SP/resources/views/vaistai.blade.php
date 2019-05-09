<style>
td 
{
    text-align: center; 
    vertical-align: middle;
}
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Galimi vaistai dozavimui</strong></div>

                <div class="card-body">
                <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="2">Pavadinimas</th>
                </tr>
                @foreach($medications as $row)
                <tr>
                    <td>{{$row['name']}}</td><td><a href="{{action('DosageController@show', $row['id'])}}" class="btn btn-warning">Daugiau informacijos</a></td>
                </tr>
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
