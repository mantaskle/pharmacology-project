@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Redaguoti paciento informaciją</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('PacientsController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div  class="form-group">
    <label for="name">Vardas:</label>
    <input type="text"name="name" class="form-control" value="{{$pacients->name}}" placeholder="Įveskite vardą" />
   </div>
   <div class="form-group">
    <label for="surname">Pavardė:</label>
    <input type="text" name="surname" class="form-control" value="{{$pacients->surname}}" placeholder="Įveskite pavardę" />
   </div>
   <div class="form-group">
    <label for="age">Amžius:</label>  
    <input type="text" name="age" class="form-control" value="{{$pacients->age}}" placeholder="Įveskite amžių" />
   </div>
   <div class="form-group">
    <label for="height">Ūgis:</label>
    <input type="text" name="height" class="form-control" value="{{$pacients->height}}" placeholder="Įveskite ūgį (centimetrais)" />
   </div>
   <div class="form-group">
    <label for="weight">Svoris:</label>
    <input type="text" name="weight" class="form-control" value="{{$pacients->weight}}" placeholder="Įveskite svorį (kilogramais)" />
   </div>
   <div class="form-group">
    <label for="condition">Skausmo lygmuo (0-10):</label>
    <input type="text" name="condition" class="form-control" value="{{$pacients->condition}}" placeholder="Įveskite skausmo lygmenį (0-10)" />
   </div>
   <div class="form-group">
    <label for="additional_information">Papildoma informacija:</label>
    <input type="text" name="additional_information" class="form-control" value="{{$pacients->additional_information}}" placeholder="Įveskite papildomą informaciją (ankstesnė gydymo istorija)" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Išsaugoti" />
   </div>
  </form>
 </div>
</div>

@endsection