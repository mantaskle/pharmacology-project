@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>Pradžia</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sveiki sugrįžę!
                    <br><br>
                    Norėdami pradėti naudotis sistema, pasirinkite Jums aktualią meniu skiltį.

                    @if (Auth::user()->admin)
                        <p>
                            Peržiūrėkite visas savo <a href="{{ url('tickets') }}">užklausas</a>.
                        </p>
                    @else
                        <p>
                            Peržiūrėkite visas savo <a href="{{ url('my_tickets') }}">užklausas</a> arba <a href="{{ url('new_ticket') }}">pridėkite naują</a>.
                        </p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
