@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
  <br/>
    <h3 allign="center">Pacientų informacija</h3>
  <br/>
  @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
  @endif
    <div allign="right">
        <a class="btn btn-primary" href="{{route('pacients.create')}}">Pridėti pacientą</a>
    <br/>
    <br/>
    </div>
    <table class="table table-bordered table-striped">
    <tr>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Amžius</th>
        <th>Ūgis (cm)</th>
        <th>Svoris (kg)</th>
        <th>Skausmo lygmuo</th>
        <th>Papildoma informacija</th>
        <th>Redaguoti</th>
        <th>Šalinti</th>
        </tr>
   @foreach($pacients as $row)
    <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['surname']}}</td>
        <td>{{$row['age']}}</td>
        <td>{{$row['height']}}</td>
        <td>{{$row['weight']}}</td>
        <td>{{$row['condition']}}</td>
        <td>{{$row['additional_information']}}</td>
        <td><a href="{{action('PacientsController@edit', $row['id'])}}" class="btn btn-warning">Redaguoti</a></td>
        <td>
            <form method="post" class="delete_form" action="{{action('PacientsController@destroy', $row['id'])}}">
         {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE" />
            <button type="submit" class="btn btn-danger">Šalinti</button>
            </form>
        </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
    $('.delete_form').on('submit', function(){
        if(confirm("Ar tikrai norite pašalinti šį pacientą?"))
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