@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mano paskyra</div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Vartotojo vardas</th>
                        <th>El. Paštas</th>
                        <th>Registracijos data</th>
                        </tr>
                        <tr>
                            <td>{{Auth::user()->name}}</td>
                            <td>{{Auth::user()->email}}</td>
                            <td>{{Auth::user()->created_at}}</td>                           
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
