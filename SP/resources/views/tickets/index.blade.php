@extends('layouts.app')
@section('title', 'Visos užklausos')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="h2 text-white fa fa-ticket">Užklausos</p>
                </div>

                <div class="panel-body">
                    @if ($tickets->isEmpty())
                        <p>Šiuo metu nėra užklausų.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kategorija</th>
                                    <th>Pavadinimas</th>
                                    <th>Būsena</th>
                                    <th>Atnaujinta</th>
                                    <th style="text-align:center" colspan="2">Veiksmai</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>
                                    @foreach ($categories as $category)
                                        @if ($category->id === $ticket->category_id)
                                            {{ $category->name }}
                                        @endif
                                    @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td>
                                    @if ($ticket->status === 'Atidaryta')
                                        <span class="label label-success">{{ $ticket->status }}</span>
                                    @else
                                        <span class="label label-danger">{{ $ticket->status }}</span>
                                    @endif
                                    </td>
                                    <td>{{ $ticket->updated_at }}</td>
                                    <td>
                                        <a href="{{ url('tickets/' . $ticket->ticket_id) }}" class="btn btn-primary">Komentuoti</a>
                                    </td>
                                    <td>
                                        <form action="{{ url('close_ticket/' . $ticket->ticket_id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            <button type="submit" class="btn btn-danger">Uždaryti</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $tickets->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection