@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-8">
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

   <div class="form-group{{ $errors->has('pacient_id') ? ' has-error' : '' }}">
   <label for="pacient_id">Pacientas:</label>


       <select id="pacient_id" type="pacient_id" class="form-control" name="pacient_id">
              <option value="">Pasirinkite pacientą</option>
              @foreach ($allPacients as $pacient)
              <option value="{{ $pacient->id }}">{{ $pacient->name }} {{$pacient->surname}}</option>
              @endforeach
       </select>

       @if ($errors->has('pacient_id'))
              <span class="help-block">
              <strong>{{ $errors->first('pacient_id') }}</strong>
              </span>
       @endif      
   </div>

   <div class="form-group{{ $errors->has('medication_id') ? ' has-error' : '' }}">
       <label for="medication_id">Vaistas:</label>

       
              <select id="medication_id" type="medication_id" class="form-control" name="medication_id">
                     <option value="">Pasirinkite vaistą</option>
                     @foreach ($allMeds as $med)
                     <option value="{{ $med->id }}">{{ $med->name }}</option>
                     @endforeach
              </select>

              @if ($errors->has('medication_id'))
                     <span class="help-block">
                     <strong>{{ $errors->first('medication_id') }}</strong>
                     </span>
              @endif      
   </div>

   <div class="form-group">
   <label>Papildoma informacija:</label>
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