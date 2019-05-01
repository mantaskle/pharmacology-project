@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Paskyros redagavimas</div>
                <div class="card-body">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <table class="table table-bordered table-striped">
                    <tr>
                    <form method="post" action="{{action('HomeController@update', $user->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Įveskite vartotojo vardą" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="Įveskite el. paštą" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Išsaugoti" />
                        </div>
                    </form>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
