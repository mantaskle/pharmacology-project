@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
  <br/>
    <h3 allign="center">Dozavimo rezultatai</h3>
  <br/>
    <div allign="right">
        <a class="btn btn-primary" href="{{url('/vaistu-dozavimas')}}">Atgal</a>
    <br/>
    <br/>
    </div>
    <table class="table table-bordered table-striped">
    <tr>
        <th>Paskirti vaistai</th>
        <th>Kiekis (mg)</th>
        <th>Dozė</th>
        </tr>
    <tr>
        <td>{{$medication}}</td>
        <td>{{$quantity}}</td>
        <td>kas {{$time}} valandas/-ų</td>
   </tr>
  </table>
 </div>
</div>
@endsection
