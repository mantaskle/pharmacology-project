@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Pridėti paskirtą receptą</h3>
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
  <form method="POST" action="{{url('prescriptions')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="prescription_id" class="form-control" placeholder="Įveskite recepto ID" />
   </div>
   <div class="form-group">
    <input type="text" name="from_date" class="form-control" placeholder="Įveskite datą nuo" />
   </div>
   <div class="form-group">
    <input type="text" name="to_date" class="form-control" placeholder="Įveskite datą iki" />
   </div>
   <div class="form-group">
    <input type="text" name="pacient_id" class="form-control" placeholder="Pasirinkite paciento ID" />
   </div>
   <div class="form-group">
    <input type="text" name="medication_id" class="form-control" placeholder="Pasirinkite vaistą" />
   </div>
   <div class="form-group">
    <input type="text" name="additional_information" class="form-control" placeholder="Įveskite papildomą informaciją (ankstesnė gydymo istorija)" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Išsaugoti"/>
    <td><a href="{{ route('prescriptions.index') }}" class="btn btn-primary btn-m">Atgal</a>
    </td>
   </div>
  </form>
 </div>
</div>
@endsection