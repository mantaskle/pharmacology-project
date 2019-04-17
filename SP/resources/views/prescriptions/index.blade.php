@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
  <br/>
    <h3 allign="center">Paskirti receptai pacientams</h3>
  <br/>
  @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
  @endif
    <div allign="right">
        <a class="btn btn-primary" href="{{route('prescriptions.create')}}">Pridėti receptą</a>
    <br/>
    <br/>
    </div>
    <table class="table table-bordered table-striped">
    <tr>
        <th>Pavadinimas</th>
        <th>Kiekis</th>
        <th>Laikas / Kiekis</th>
        <th>Data nuo</th>
        <th>Data iki</th>
        <th>Pacientas</th>
        <th>Paskirti vaistai</th>
        <th>Papildoma informacija</th>
        </tr>
   @foreach($prescriptions as $row)
    <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['dosage_amount']}}</td>
        <td>{{$row['dosage_time']}}</td>
        <td>{{$row['from_date']}}</td>
        <td>{{$row['to_date']}}</td>
        <td>{{$row['pacient_id']}}</td>
        <td>{{$row['medication_id']}}</td>
        <td>{{$row['additional_information']}}</td>
        <td><a href="{{action('PrescriptionsController@edit', $row['id'])}}" class="btn btn-warning">Redaguoti</a></td>
        <td>
        <form action="{{action('PrescriptionsController@destroy', $row['id'])}}" method="post" class="delete_form"
                style="display: inline" onsubmit="return confirm('Ar tikrai norite pašalinti receptą?');">
                    <input type="hidden" name="_method" value="DELETE">{{ csrf_field() }}
                        <button class="btn btn-danger">Šalinti</button>
        </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
$('.delete_form').on('submit', function(){
        if(confirm("Ar tikrai norite pašalinti šį receptą?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    });
});
</script>
@endsection
