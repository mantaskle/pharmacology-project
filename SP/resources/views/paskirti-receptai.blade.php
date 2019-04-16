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
        <a class="btn btn-primary" href="{{route('paskirti-receptai.create')}}">Pridėti receptą</a>
    <br/>
    <br/>
    </div>
    <table class="table table-bordered table-striped">
    <tr>
        <th>Column1</th>
        <th>Column2</th>
        <th>Column3</th>
        <th>Column4</th>
        <th>Column5</th>
        <th>Column6</th>
        <th>Column7</th>
        <th>Column8</th>
        <th>Column9</th>
        <th>Column10</th>
        </tr>
   @foreach($prescription as $row)
    <tr>
        <td>{{$row['value1']}}</td>
        <td>{{$row['value2']}}</td>
        <td>{{$row['value3']}}</td>
        <td>{{$row['value4']}}</td>
        <td>{{$row['value5']}}</td>
        <td>{{$row['value6']}}</td>
        <td>{{$row['value7']}}</td>
        <td>{{$row['value8']}}</td>
        <td>{{$row['value9']}}</td>
        <td>{{$row['value10']}}</td>
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
