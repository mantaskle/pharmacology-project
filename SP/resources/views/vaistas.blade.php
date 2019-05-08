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
                <div class="card-header">{{$medication->name}}</div>

                <div class="card-body">
                <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="1">Papildoma informacija apie vaistą</th>
                </tr>
                <tr>
                    <td>{{$medication->dosage_instructions}}</td>
                </tr>
                </table>
                <div class="form-group">
                    <td><a href="{{ url('/vaistai') }}" class="btn btn-primary btn-m">Atgal</a></td>
                </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
