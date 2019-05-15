@extends('layouts.app')

@section('title', 'Mano užklausos')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="fa fa-ticket h2 text-white">Mano užklausos</p>
                </div>

                <div class="panel-body">
                <a class="btn-marg btn btn-primary" href="{{url('new_ticket')}}">Pridėti naują užklausą</a>
                </div>

                <div class="panel-body">
                    @if ($tickets->isEmpty())
                        <p>Jūs neturite jokių užklausų.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kategorija</th>
                                    <th>Pavadinimas</th>
                                    <th>Būsena</th>
                                    <th>Atnaujinta</th>
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