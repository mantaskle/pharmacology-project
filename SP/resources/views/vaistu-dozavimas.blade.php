@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vaistų dozavimas</div>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                <form method="POST" action="{{url('medication')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="age" class="form-control" placeholder="Įveskite amžių" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="weight" class="form-control" placeholder="Įveskite svorį (kilogramais)" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="pain" class="form-control" placeholder="Įveskite skausmo lygmenį (0-12)" />
                    </div>
                    <div class="form-group">
                        {!! Form::Label('Vaistai:') !!}
                        {!! Form::select('medication', 
                        array('1' => 'Morphine', '2' => 'Codeine', '3' => 'Oxycodone', '4' => 'Methadone', '5' => 'Hydromorphone',
                        '6' => 'Meperidine'), 
                        ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Skaičuoti"/>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
