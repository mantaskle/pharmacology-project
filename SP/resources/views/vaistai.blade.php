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
                <div class="card-header">Galimi vaistai dozavimui</div>

                <div class="card-body">
                <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="2">Pavadinimas</th>
                </tr>
                <tr><td>Morphine</td><td><a href="" class="btn btn-warning">Daugiau informacijos</a></td></tr>
                <tr><td>Codeine</td><td><a href="" class="btn btn-warning">Daugiau informacijos</a></td></tr> 
                <tr><td>Oxycodone</td><td><a href="" class="btn btn-warning">Daugiau informacijos</a></td></tr> 
                <tr><td>Methadone</td><td><a href="" class="btn btn-warning">Daugiau informacijos</a></td></tr> 
                <tr><td>Hydromorphone</td><td><a href="" class="btn btn-warning">Daugiau informacijos</a></td></tr>
                <tr><td>Meperidine</td><td><a href="" class="btn btn-warning">Daugiau informacijos</a></td></tr>
                </table>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
