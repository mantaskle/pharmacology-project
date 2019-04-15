@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Pridėti</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="POST" action="{{url('pacients')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Įveskite vardą" />
   </div>
   <div class="form-group">
    <input type="text" name="surname" class="form-control" placeholder="Įveskite pavardę" />
   </div>
   <div class="form-group">
    <input type="text" name="age" class="form-control" placeholder="Įveskite amžių" />
   </div>
   <div class="form-group">
    <input type="text" name="height" class="form-control" placeholder="Įveskite ūgį (centimetrais)" />
   </div>
   <div class="form-group">
    <input type="text" name="weight" class="form-control" placeholder="Įveskite svorį (kilogramais)" />
   </div>
   <div class="form-group">
    <input type="text" name="condition" class="form-control" placeholder="Įveskite skausmo lygmenį (0-10)" />
   </div>
   <div class="form-group">
    <input type="text" name="additional_information" class="form-control" placeholder="Įveskite papildomą informaciją (ankstesnė gydymo istorija)" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Išsaugoti"/>
   </div>
  </form>
 </div>
</div>
@endsection