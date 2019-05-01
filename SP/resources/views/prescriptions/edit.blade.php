@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Redaguoti paskirto recepto informaciją</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('PrescriptionsController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="prescription_id" class="form-control" value="{{$prescriptions->name}}" placeholder="Įveskite recepto ID" />
   </div>
   <div class="form-group">
    <input type="text" name="from_date" class="form-control" value="{{$prescriptions->from_date}}" placeholder="Įveskite datą nuo" />
   </div>
   <div class="form-group">
    <input type="text" name="to_date" class="form-control" value="{{$prescriptions->to_date}}" placeholder="Įveskite datą iki" />
   </div>
   <div class="form-group">
    <input type="text" name="pacient_id" class="form-control" value="{{$prescriptions->pacient_id}}" placeholder="Pasirinkite paciento ID" />
   </div>
   <div class="form-group">
    <input type="text" name="medication_id" class="form-control" value="{{$prescriptions->medication_id}}" placeholder="Pasirinkite vaisto ID" />
   </div>
   <div class="form-group">
    <input type="text" name="additional_information" class="form-control" value="{{$prescriptions->additional_information}}" placeholder="Įveskite papildomą informaciją" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Išsaugoti" />
   </div>
  </form>
 </div>
</div>

@endsection